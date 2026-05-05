<?php

namespace App\Http\Controllers\Diary;

use Throwable;

use App\Lib\Message;
use Illuminate\Http\Request;
use App\Models\Diaries\Diary;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Validator;

class DiaryController extends AuthController
{
    /**
     * Calendar function
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function calendar(): JsonResponse
    {
        try {
            $entries = Diary::where('user_id', $this->user['id'])
                ->select('id', 'entry_date', 'title')
                ->orderBy('entry_date', 'desc')
                ->get()
                ->groupBy(fn($e) => $e->entry_date->year)
                ->map(
                    fn($byYear) => $byYear
                        ->groupBy(fn($e) => $e->entry_date->month)
                        ->map(fn($byMonth) => $byMonth->map(fn($e) => [
                            'id'    => $e->id,
                            'day'   => $e->entry_date->day,
                            'date'  => $e->entry_date->toDateString(),
                            'title' => $e->title,
                        ]))
                );

            return $this->sendResponse(Message::SHOW_OK, [
                'status' => 'success',
                'entries' => $entries,
            ], 200);
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
                'entry' => $entry,
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
