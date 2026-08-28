<?php

namespace App\Http\Controllers\Astro;

use App\Http\Controllers\Controller;
use App\Lib\Message;
use App\Services\Astro\AstroServices;
use App\Services\Astro\SwissephServices;
use App\Services\Planets\PlanetsServices;
use DivineaLabs\Swisseph\Enums\HouseSystems;
use DivineaLabs\Swisseph\Facades\Swisseph;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SwissephController extends Controller
{
    protected AstroServices $astroServices;
    protected SwissephServices $swissephServices;
    protected PlanetsServices $planetServices;

    public function __construct(AstroServices $astroServices, SwissephServices $swissephServices, PlanetsServices $planetService)
    {
        $this->astroServices = $astroServices;
        $this->swissephServices = $swissephServices;
        $this->planetServices = $planetService;
    }




    public function calculatePlanets(Request $request): JsonResponse
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'birth_date' => 'required|string|max:150',
                'today'      => 'required|string|max:5000',
                'locale'     => 'nullable|string|in:en,it,es,fr,de,la,he',
            ]);

            if ($validator->fails()) {
                return $this->sendError(Message::BAD_REQUEST, $validator->errors()->toArray(), 400);
            }

            $birthDate = $data['birth_date'];
            $today = $data['today'];
            $locale = $data['locale'] ?? 'it';

            // Ottieni i pianeti dal database
            $planetMap = $this->planetServices->getPlanetMap($locale);
            dd($planetMap);
            $planetsWithData = $this->planetServices->getPlanetsWithData($locale);

            // Calcola posizioni per entrambe le date
            $birthPositions = $this->calculateAllPlanets($birthDate, $planetMap);
            $currentPositions = $this->calculateAllPlanets($today, $planetMap);

            // Calcola le differenze
            $differences = $this->calculateDifferences($birthPositions, $currentPositions, $planetsWithData);

            return response()->json([
                'success' => true,
                'data' => [
                    'birth_date' => $birthDate,
                    'today' => $today,
                    'locale' => $locale,
                    'birth_positions' => $birthPositions,
                    'current_positions' => $currentPositions,
                    'differences' => $differences,
                    'summary' => $this->generateSummary($differences, $planetsWithData),
                    'planets_info' => $planetsWithData,
                ]
            ], 200);
        } catch (\Exception $e) {
            Log::error('CALCULATE_PLANETS_ERROR', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Errore nel calcolo delle posizioni planetarie',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Calcola le posizioni di tutti i pianeti per una data specifica
     */
    private function calculateAllPlanets(string $date, array $planetMap): array
    {
        $results = [];
        $planetIds = array_keys($planetMap);

        foreach ($planetIds as $planetId) {
            $planetName = $planetMap[$planetId] ?? "Planet_{$planetId}";

            try {
                $position = $this->swissephServices->getPlanetPosition($date, $planetId);
                $results[$planetName] = array_merge($position, [
                    'planet_id' => $planetId,
                ]);
            } catch (\Exception $e) {
                Log::warning("PLANET_CALCULATION_ERROR", [
                    'planet' => $planetName,
                    'planet_id' => $planetId,
                    'error' => $e->getMessage()
                ]);

                $results[$planetName] = [
                    'error' => $e->getMessage(),
                    'planet_name' => $planetName,
                    'planet_id' => $planetId,
                    'longitude' => null,
                    'latitude' => null,
                    'distance' => null
                ];
            }
        }

        return $results;
    }

    /**
     * Calcola le differenze tra le posizioni delle due date
     */
    private function calculateDifferences(array $birthPositions, array $currentPositions, array $planetsData): array
    {
        $differences = [];

        foreach ($birthPositions as $planetName => $birthData) {
            $currentData = $currentPositions[$planetName] ?? null;
            $planetId = $birthData['planet_id'] ?? null;

            $planetInfo = null;
            if ($planetId !== null && isset($planetsData[$planetId])) {
                $planetInfo = $planetsData[$planetId];
            }

            if ($currentData && isset($birthData['longitude']) && isset($currentData['longitude'])) {
                $diffLongitude = $currentData['longitude'] - $birthData['longitude'];

                // Normalizza la differenza per gestire il passaggio attraverso 0°
                if ($diffLongitude > 180) {
                    $diffLongitude = $diffLongitude - 360;
                } elseif ($diffLongitude < -180) {
                    $diffLongitude = $diffLongitude + 360;
                }

                $differences[$planetName] = [
                    'planet_id' => $planetId,
                    'longitude_diff' => round($diffLongitude, 6),
                    'absolute_diff' => round(abs($diffLongitude), 6),
                    'distance_diff' => isset($birthData['distance'], $currentData['distance'])
                        ? round($currentData['distance'] - $birthData['distance'], 6)
                        : null,
                    'planet_info' => $planetInfo,
                ];
            } else {
                $differences[$planetName] = [
                    'planet_id' => $planetId,
                    'error' => 'Dati mancanti per il calcolo della differenza',
                    'planet_info' => $planetInfo,
                ];
            }
        }

        return $differences;
    }

    /**
     * Genera un riassunto delle posizioni planetarie
     */
    private function generateSummary(array $differences, array $planetsData): array
    {
        $summary = [];

        foreach ($differences as $planetName => $diff) {
            if (isset($diff['longitude_diff']) && isset($diff['absolute_diff'])) {
                $planetId = $diff['planet_id'] ?? null;
                $planetInfo = $planetId && isset($planetsData[$planetId]) ? $planetsData[$planetId] : null;

                $summary[] = [
                    'planet' => $planetName,
                    'planet_id' => $planetId,
                    'symbol' => $planetInfo['symbol'] ?? null,
                    'movement' => $diff['longitude_diff'] > 0 ? 'avanti' : 'indietro',
                    'degrees' => $diff['absolute_diff'],
                    'significant' => $diff['absolute_diff'] > 1,
                    'description' => $planetInfo['description'] ?? null,
                    'gender' => $planetInfo['gender'] ?? null,
                    'day' => $planetInfo['day'] ?? null,
                ];
            }
        }

        // Ordina per movimento più significativo
        usort($summary, function ($a, $b) {
            return $b['degrees'] <=> $a['degrees'];
        });

        return $summary;
    }









    /**
     * Calcola la mappa natale
     */
    public function calculate(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'date' => 'required|date_format:d-m-Y',
            'time' => 'required|date_format:H:i',
            'city' => 'required|string',
            'timezone' => 'required|string',
            'language' => 'sometimes|string|in:it,en,es,fr,de,la,he'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Dati di input non validi',
                'details' => $validator->errors()->toArray()
            ], 400);
        }

        try {
            $locale = $data['language'] ?? 'it';

            // Ottieni coordinate dalla città
            $coordinates = $this->swissephServices->getCoordinates($data['city']);
            if (!$coordinates) {
                return response()->json([
                    'success' => false,
                    'error' => 'Città non trovata',
                    'message' => 'Impossibile trovare le coordinate per: ' . $data['city']
                ], 404);
            }

            // Calcola la mappa natale
            $result = $this->swissephServices->calculateNatalChart(
                $data['date'],
                $data['time'],
                $coordinates['latitude'],
                $coordinates['longitude'],
                $this->astroServices,
                $locale
            );

            return response()->json([
                'success' => true,
                'data' => [
                    'date' => $data['date'],
                    'time' => $data['time'],
                    'timezone' => $data['timezone'],
                    'city' => $data['city'],
                    'coordinates' => $coordinates,
                    'planets' => $result['planets'],
                    'houses' => $result['houses'],
                ]
            ]);
        } catch (\Exception $e) {
            Log::error('NATAL_CHART_ERROR', [
                'input' => $data,
                'error' => $e->getMessage()
            ]);
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Lista città (endpoint)
     */
    public function cities()
    {
        return response()->json([
            'success' => true,
            'cities' => $this->swissephServices->getPredefinedCities(),
        ]);
    }

    public function debug()
    {

        // $result = Swisseph::setDateTime('2025-03-23 21:21:00', 'Europe/Warsaw')
        //     ->setLocation(17.038538, 51.107883, 'Wroclaw') // lon, lat
        //     ->getCliCommand();

        // $result = Swisseph::positions()->get();

        $result = Swisseph::setDateTime('2025-03-23 21:21:00', 'Europe/Warsaw')
            ->setLocation(17.038538, 51.107883, 'Wroclaw') // lon, lat
            ->withHouses(HouseSystems::KOCH)
            ->get();

        // $result = Swisseph::positions()
        //     ->setDateTime('2025-03-23 21:21:00', 'Europe/Warsaw')
        //     ->setLocation(17.038538, 51.107883, 'Wroclaw')
        //     ->selectBodies(PlanetBodySelection::SUN)
        //     ->withHouses(HouseSystems::KOCH)
        //     ->get();

        // $result = Swisseph::setDateTime('2026-07-30 21:00:00', 'Europe/Warsaw')
        //     ->setLocation(17.038538, 51.107883, 'Wroclaw') // lon, lat
        //     ->withHouses(HouseSystems::KOCH)
        //     ->get();

        dd($result);
    }
}
