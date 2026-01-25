<?php

namespace App\Http\Controllers\Angel;

use Throwable;
use Carbon\Carbon;
use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Angels\AngelsMeaning;

class AngelController extends Controller
{
    /**
     * Get Angels function
     *
     * @param integer|null $number
     * @return JsonResponse
     */
    public function getAngels(Request $request): JsonResponse
    {
        try {

            $results = collect();

            // Number
            if ($request->filled('number')) {
                $angel = AngelsMeaning::where('number', $request->integer('number'))->first();

                return $this->sendResponse(
                    Message::SHOW_OK,
                    $angel ? [$angel->toArray()] : [],
                    200
                );
            }
            // Birth Date
            if ($request->filled('birthdate')) {
                $date = \Carbon\Carbon::parse($request->input('birthdate'));
                if ($date->month === 3 && $date->day >= 16 && $date->day <= 20) {
                    $birthAngel = AngelsMeaning::whereIn('number', [72, 1])
                        ->orderBy('number')
                        ->get();

                    $results->push($birthAngel);
                }

                $birthAngel = $this->findAngelByDate($date->day, $date->month);
                if ($birthAngel) {
                    $results->push($birthAngel);
                }
            }

            // Date (single param: date)
            if ($request->filled('date')) {
                $date = Carbon::createFromFormat(
                    'd-m',
                    $request->input('date')
                )->year(now()->year);
            } else {
                $date = now();
            }

            $dateAngel = $this->findAngelByDate($date->day, $date->month);

            if ($dateAngel) {
                $results->push($dateAngel);
            }


            return $this->sendResponse(
                Message::SHOW_OK,
                $results
                    ->unique('number')
                    ->values()
                    ->map(fn($angel) => $angel->toArray())
                    ->toArray(),
                200
            );
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Find Angel By Date function
     *
     * @param integer $day
     * @param integer $month
     * @return AngelsMeaning|null
     */
    private function findAngelByDate(int $day, int $month): ?AngelsMeaning
    {
        return AngelsMeaning::where(function ($q) use ($day, $month) {
            $q->where('regency_start_month', $month)
                ->where('regency_end_month', $month)
                ->where('regency_start_day', '<=', $day)
                ->where('regency_end_day', '>=', $day);
        })->first();
    }
}
