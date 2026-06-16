<?php

namespace App\Http\Controllers\Astro;

use App\Http\Controllers\Controller;
use App\Services\Astro\AstroServices;
use App\Services\Astro\SwissephServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SwissephController extends Controller
{
    protected AstroServices $astroServices;
    protected SwissephServices $swissephServices;

    public function __construct(AstroServices $astroServices, SwissephServices $swissephServices)
    {
        $this->astroServices = $astroServices;
        $this->swissephServices = $swissephServices;
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
}