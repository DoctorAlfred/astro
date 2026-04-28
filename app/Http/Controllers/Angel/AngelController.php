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

            $locale = $request->get('language', 'it');
            app()->setLocale($locale);

            // NUMBER
            if ($request->filled('number')) {
                $number = $request->integer('number');

                // Validazione 1-77
                if (!in_array($number, range(1, 77))) {
                    return self::sendError(Message::SHOW_KO, ['message' => 'Angel number must be between 1-77'], 422);
                }

                $angel = AngelsMeaning::where('number', $request->integer('number'))->first();
                if (!$angel) {
                    return self::sendError(Message::SHOW_KO, [
                        'message' => 'Angel not found'
                    ], 404);
                }

                $angel->setLocale($locale);
                $data = $angel->attributesToArray();

                return self::sendResponse(Message::SHOW_OK, $data, 200);
            }

            // DATE RESOLUTION
            if ($request->filled('birthdate') || $request->filled('date')) {
                $inputDate = $request->input('birthdate') ?? $request->input('date');

                try {
                    $date = Carbon::createFromFormat('d-m', $inputDate)
                        ->year(now()->year);
                } catch (\Exception $e) {
                    $date = Carbon::parse($inputDate);
                }
            } else {
                $date = now();
            }

            $results = collect();

            $angel = $this->findAngelByDate($date->day, $date->month);
            if ($angel) {
                $results->push($angel);
            }

            $data = $results
                ->unique('number')
                ->values()
                ->map(function ($angel) use ($date, $locale) {
                    $angel->setLocale($locale);

                    $data = $angel->attributesToArray();

                    $sign = collect($angel->zodiac_days)
                        ->first(function ($item) use ($date) {
                            return $item['day'] == $date->day
                                && $item['month'] == $date->month;
                        });

                    $data['zodiac_sign'] = $sign['sign'] ?? null;

                    return $data;
                });

            // RESPONSE
            return self::sendResponse(Message::SHOW_OK, $data[0], 200);
        } catch (Throwable $e) {
            return self::sendError(Message::SHOW_KO, [
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
        $angel = AngelsMeaning::whereJsonContains('zodiac_days', [
            'day' => $day,
            'month' => $month,
        ])->first();

        if (!$angel && $month === 3) {
            return match ($day) {
                16 => AngelsMeaning::where('number', 73)->first(),
                17 => AngelsMeaning::where('number', 74)->first(),
                18 => AngelsMeaning::where('number', 75)->first(),
                19 => AngelsMeaning::where('number', 76)->first(),
                20 => AngelsMeaning::where('number', 77)->first(),
                default => null
            };
        }

        return $angel;
    }
}
