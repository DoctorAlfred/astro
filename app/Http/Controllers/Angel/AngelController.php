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
            /*
            3. Correzione Date (Zodiac Days)

                Alfredo, qui torniamo alla tua decisione di informatico. Le date che hai inserito sono "statiche":

                    56. Poiel: Hai messo 21-25 Dicembre.

                    Ma attenzione: Il 21 Dicembre il Sole può essere ancora in Sagittario (Angelo 54).

                Il mio consiglio per l'App Melahel:
                Invece di un array statico di giorni, la tua funzione PHP dovrebbe calcolare l'angelo così:

                $angel = floor(LongitudineSolare/5)+1
            */
            $locale = $request->get('language', 'it');
            app()->setLocale($locale);

            // NUMBER
            if ($request->filled('number')) {
                $angel = AngelsMeaning::where('number', $request->integer('number'))->first();
                $data = $angel ? [$angel->attributesToArray()] : [];

                return self::sendResponse(Message::SHOW_OK, $data[0], 200);
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
        return AngelsMeaning::whereJsonContains('zodiac_days', [
            'day' => $day,
            'month' => $month,
        ])->first();
    }
}
