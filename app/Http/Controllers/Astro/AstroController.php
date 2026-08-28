<?php

namespace App\Http\Controllers\Astro;

use App\Http\Controllers\Controller;
use App\Services\Astro\AstroServices;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DateTime;
use DateTimeZone;
use Illuminate\Validation\ValidationException;

/**
 * Controller per i calcoli astrologici
 * 
 * Gestisce le richieste relative al calcolo della mappa natale
 * e dei segni zodiacali.
 */
class AstroController extends Controller
{
    protected AstroServices $astroServices;

    /**
     * Inietta il servizio AstroServices
     *
     * @param AstroServices $astroServices
     */
    public function __construct(AstroServices $astroServices)
    {
        $this->astroServices = $astroServices;
    }

    /**
     * Calcola la mappa natale completa
     *
     * @param Request $request
     * @return JsonResponse
     * 
     * @param date string required Data nel formato Y-m-d (es. 1990-05-15)
     * @param time string required Ora nel formato H:i (es. 14:30)
     * @param latitude float required Latitudine in gradi decimali (es. 41.902782)
     * @param longitude float required Longitudine in gradi decimali (es. 12.496366)
     * @param timezone string required Fuso orario (es. Europe/Rome)
     * @param language string Lingua (it, en, es, fr, de, la, he) - default it
     */
    public function calculate(Request $request): JsonResponse
    {
        try {
            // Validazione dei dati in input
            $validated = $request->validate([
                'date' => 'required|date_format:Y-m-d',
                'time' => 'required|date_format:H:i',
                'latitude' => 'required|numeric|between:-90,90',
                'longitude' => 'required|numeric|between:-180,180',
                'timezone' => 'required|string|timezone',
                'language' => 'sometimes|string'
            ]);

            // Imposta la lingua (default 'it')
            $locale = $validated['language'] ?? 'it';

            // Crea l'oggetto DateTime con il fuso orario specificato
            $dateTime = DateTime::createFromFormat(
                'Y-m-d H:i',
                $validated['date'] . ' ' . $validated['time'],
                new DateTimeZone($validated['timezone'])
            );

            // Verifica che la data sia valida
            if (!$dateTime) {
                return response()->json([
                    'success' => false,
                    'error' => 'Data o ora non valida',
                    'details' => 'Verificare che la data e l\'ora siano corrette per il fuso orario specificato'
                ], 422);
            }

            // Calcola la mappa natale
            $result = $this->astroServices->calculateNatalChart(
                $dateTime,
                (float) $validated['latitude'],
                (float) $validated['longitude'],
                $locale
            );

            return response()->json($result);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Dati di input non validi',
                'details' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Errore nel calcolo della mappa',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Calcola solo il segno solare (versione semplificata)
     *
     * @param Request $request
     * @return JsonResponse
     * 
     * @bodyParam date string required Data nel formato Y-m-d (es. 1990-05-15)
     * @bodyParam time string Ora nel formato H:i (es. 14:30) - opzionale
     * @bodyParam language string Lingua (it, en, es, fr, de, la, he) - default it
     */
    public function sunSign(Request $request): JsonResponse
    {
        try {
            // Validazione dei dati in input
            $validated = $request->validate([
                'date' => 'required|date_format:Y-m-d',
                'time' => 'sometimes|date_format:H:i',
                'language' => 'sometimes|string'
            ]);

            // Imposta la lingua (default 'it')
            $locale = $validated['language'] ?? 'it';

            // Ora di default a mezzogiorno se non fornita
            $time = $validated['time'] ?? '12:00';
            
            // Crea l'oggetto DateTime
            $dateTime = new DateTime($validated['date'] . ' ' . $time);

            // Calcola il giorno giuliano
            $hour = (float) $dateTime->format('H') + (float) $dateTime->format('i') / 60;
            $julianDay = $this->astroServices->julianDay(
                (int) $dateTime->format('Y'),
                (int) $dateTime->format('m'),
                (int) $dateTime->format('d'),
                $hour
            );

            // Calcola la longitudine del Sole
            $sunLongitude = $this->astroServices->sunLongitude($julianDay);
            
            // Ottiene il segno zodiacale
            $sign = $this->astroServices->getSign($sunLongitude, $locale);

            return response()->json([
                'success' => true,
                'data' => [
                    'date' => $validated['date'],
                    'time' => $time,
                    'sun_sign' => $sign
                ]
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Dati di input non validi',
                'details' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Errore nel calcolo del segno solare',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Calcola solo l'ascendente
     *
     * @param Request $request
     * @return JsonResponse
     * 
     * @bodyParam date string required Data nel formato Y-m-d (es. 1990-05-15)
     * @bodyParam time string required Ora nel formato H:i (es. 14:30)
     * @bodyParam latitude float required Latitudine in gradi decimali (es. 41.902782)
     * @bodyParam longitude float required Longitudine in gradi decimali (es. 12.496366)
     * @bodyParam timezone string required Fuso orario (es. Europe/Rome)
     * @bodyParam language string Lingua (it, en, es, fr, de, la, he) - default it
     */
    public function ascendant(Request $request): JsonResponse
    {
        try {
            // Validazione dei dati in input
            $validated = $request->validate([
                'date' => 'required|date_format:Y-m-d',
                'time' => 'required|date_format:H:i',
                'latitude' => 'required|numeric|between:-90,90',
                'longitude' => 'required|numeric|between:-180,180',
                'timezone' => 'required|string|timezone',
                'language' => 'sometimes|string'
            ]);

            // Imposta la lingua (default 'it')
            $locale = $validated['language'] ?? 'it';

            // Crea l'oggetto DateTime con il fuso orario specificato
            $dateTime = DateTime::createFromFormat(
                'Y-m-d H:i',
                $validated['date'] . ' ' . $validated['time'],
                new DateTimeZone($validated['timezone'])
            );

            if (!$dateTime) {
                return response()->json([
                    'success' => false,
                    'error' => 'Data o ora non valida'
                ], 422);
            }

            // Calcola il giorno giuliano
            $hour = (float) $dateTime->format('H') + (float) $dateTime->format('i') / 60;
            $julianDay = $this->astroServices->julianDay(
                (int) $dateTime->format('Y'),
                (int) $dateTime->format('m'),
                (int) $dateTime->format('d'),
                $hour
            );

            // Calcola il tempo siderale e l'ascendente
            $siderealTime = $this->astroServices->siderealTime($julianDay);
            $ascLongitude = $this->astroServices->ascendant(
                $siderealTime,
                (float) $validated['latitude']
            );

            // Ottiene il segno zodiacale dell'ascendente
            $ascendantSign = $this->astroServices->getSign($ascLongitude, $locale);

            return response()->json([
                'success' => true,
                'data' => [
                    'datetime' => $dateTime->format('Y-m-d H:i:s'),
                    'timezone' => $validated['timezone'],
                    'coordinates' => [
                        'latitude' => (float) $validated['latitude'],
                        'longitude' => (float) $validated['longitude']
                    ],
                    'ascendant' => $ascendantSign,
                    'sidereal_time' => round($siderealTime, 4),
                    'julian_day' => $julianDay
                ]
            ]);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Dati di input non validi',
                'details' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Errore nel calcolo dell\'ascendente',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}