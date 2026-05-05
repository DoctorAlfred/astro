<?php

namespace App\Http\Controllers\Diary;

use App\Http\Controllers\AuthController;
use App\Lib\Message;
use App\Models\Diaries\Diary;
use App\Models\Shop\Subscription;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Throwable;

class DiaryController extends AuthController
{
    /**
     * Calendar function
     *
     * @param string $year
     * @return \Illuminate\Http\JsonResponse
     */
    public function calendar($year = null, $month = null, $day = null): JsonResponse
    {
        try {
            // I’m wrapping up the current year
            if (!$year) {
                $year = Carbon::now()->year;
            }
            
            // Search by query
            $query = Diary::where('user_id', $this->user['id'])
                ->where('category', 'diary')
                ->orderBy('entry_date', 'asc');

            // by YEAR
            $query->whereYear('entry_date', $year);

            // by MONTH
            if ($month) {
                $query->whereMonth('entry_date', $month);
            }

            // by DAY
            if ($day) {
                $query->whereDay('entry_date', $day);
            }

            $diaries = $query->get(['id', 'entry_date', 'title', 'description']);
            
            // Get data for Day
            if ($day) {
                $entries = $diaries->map(function ($diary) {
                    return [
                        'id' => $diary->id,
                        'date' => $diary->entry_date->format('Y-m-d'),
                        'title' => $diary->title,
                        'description' => $diary->description,
                    ];
                });

                return $this->sendResponse(Message::SHOW_OK, [
                    'status' => 'success',
                    'year' => (int) $year,
                    'month' => (int) $month,
                    'day' => (int) $day,
                    'entries' => $entries,
                ], 200);
            }

            // Get data for Month
            if ($month && !$day) {
                $entries = $diaries->map(function ($diary) {
                    return [
                        'id' => $diary->id,
                        'day' => $diary->entry_date->day,
                        'date' => $diary->entry_date->format('Y-m-d'),
                        'title' => $diary->title,
                    ];
                });

                return $this->sendResponse(Message::SHOW_OK, [
                    'status' => 'success',
                    'year' => (int) $year,
                    'month' => (int) $month,
                    'entries' => $entries,
                ], 200);
            }

            $organized = [];

            foreach ($diaries as $diary) {
                $yearKey = (string) $diary->entry_date->year;
                $monthKey = (string) $diary->entry_date->month;
                $dayValue = $diary->entry_date->day;
                $date = $diary->entry_date->format('Y-m-d');

                if (!isset($organized[$yearKey])) {
                    $organized[$yearKey] = [];
                }

                if (!isset($organized[$yearKey][$monthKey])) {
                    $organized[$yearKey][$monthKey] = [];
                }

                $organized[$yearKey][$monthKey][] = [
                    'id' => $diary->id,
                    'day' => $dayValue,
                    'date' => $date,
                    'title' => $diary->title,
                ];
            }

            return $this->sendResponse(Message::SHOW_OK, [
                'status' => 'success',
                'year' => (int) $year,
                'month' => $month ? (int) $month : null,
                'entries' => $organized,
            ], 200);

            // $entries = Diary::where('user_id', $this->user['id'])
            //     ->select('id', 'entry_date', 'title')
            //     ->orderBy('entry_date', 'desc')
            //     ->get()
            //     ->groupBy(fn($e) => $e->entry_date->year)
            //     ->map(
            //         fn($byYear) => $byYear
            //             ->groupBy(fn($e) => $e->entry_date->month)
            //             ->map(fn($byMonth) => $byMonth->map(fn($e) => [
            //                 'id'    => $e->id,
            //                 'day'   => $e->entry_date->day,
            //                 'date'  => $e->entry_date->toDateString(),
            //                 'title' => $e->title,
            //             ]))
            //     );

            // return $this->sendResponse(Message::SHOW_OK, [
            //     'status' => 'success',
            //     'entries' => $entries,
            // ], 200);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Get Diary function
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDiary(string $id): JsonResponse
    {
        try {
            $entry = Diary::where('user_id', $this->user['id'])
                ->where(['id' => $id, 'category' => 'diary'])
                ->select(
                    'entry_date',
                    'title',
                    'category',
                    'description',
                    'created_at',
                    'updated_at'
                )
                ->firstOrFail();

            return $this->sendResponse(Message::SHOW_OK, [
                'status' => 'success',
                'entry'  => array_merge($entry->toArray(), [
                    'editable' => $entry->isEditable(),
                ]),
            ], 200);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Store Diary function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeDiary(Request $request): JsonResponse
    {
        try {

            $user = $this->user;
            $subscription = Subscription::where('user_id', $user['id'])
                ->leftJoin('plans', 'subscriptions.plan_id', '=', 'plans.id')
                ->select(
                    'plans.slug',
                    'plans.max_contacts as maxContacts',
                    'plans.can_write_diary as canWriteDiary',
                    'subscriptions.price_paid as paid',
                    'subscriptions.billing_cycle as duration',
                    'subscriptions.is_active as isActive',
                    'subscriptions.updated_at as started'
                )
                ->first();
            if (!$subscription->canWriteDiary) {
                return $this->sendError(Message::CREATE_KO, [
                    'status' => false,
                    'message' => Message::PERMISSIONS_KO
                ], 404);
            }


            $data = $request->validate([
                'title'       => 'required|string|max:150',
                'description' => 'required|string|max:5000',
            ]);

            $entry = Diary::updateOrCreate(
                [
                    'user_id' => $this->user['id'],
                    'entry_date' => today(),
                    'category' => 'diary'
                ],
                $data
            );

            return $this->sendResponse(Message::CREATE_OK, [
                'status' => 'success',
                'entry' => [
                    'entry_date' => $entry->entry_date?->format('d-m-Y'),
                    'title' => $entry->title,
                    'category' => $entry->category,
                    'description' => $entry->description,
                    'updated_at' => $entry->updated_at?->format('d-m-Y H:i'),
                ],
            ], 201);
        } catch (Throwable $e) {
            return $this->sendError(Message::CREATE_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update Diary function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateDiary(Request $request): JsonResponse
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'id'  => 'required|string|min:3',
                'title'       => 'sometimes|string|max:150',
                'description' => 'sometimes|string|max:5000',
            ]);

            if ($validator->fails()) {
                Log::error(Message::UPDATE_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::UPDATE_KO, $validator->errors()->toArray(), 400);
            }

            $entry = Diary::where('user_id', $this->user['id'])
                ->where(['id' => $data['id'], 'category' => 'diary'])
                ->firstOrFail();

            if (!$entry->isEditable()) {
                return $this->sendError(
                    'Edits are no longer permitted after 7 days',
                    ['status' => false],
                    403
                );
            }

            $entry->update($request->only(['title', 'description']));

            return $this->sendResponse(Message::UPDATE_OK, [
                'status' => 'success',
                'entry' => $entry,
            ], 200);
        } catch (Throwable $e) {
            return $this->sendError(Message::UPDATE_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}
