<?php

namespace App\Services\Astro;

use Illuminate\Support\Facades\Log;

class SwissephServices
{
    private string $swetestPath;
    private string $ephePath;

    public function __construct()
    {
        $this->swetestPath = base_path('swisseph/bin/swetest.exe');
        $this->ephePath = base_path('swisseph/ephe');
    }

    /**
     * Calcola il giorno giuliano
     */
    private function calculateJulianDay(int $year, int $month, int $day, float $hour): float
    {
        if ($month <= 2) {
            $year -= 1;
            $month += 12;
        }

        $a = floor($year / 100);
        $b = 2 - $a + floor($a / 4);

        $jd = floor(365.25 * ($year + 4716)) + floor(30.6001 * ($month + 1)) + $day + $hour / 24 - 1524.5;

        if ($jd >= 2299160) {
            $jd = floor(365.25 * ($year + 4716)) + floor(30.6001 * ($month + 1)) + $day + $hour / 24 + $b - 1524.5;
        }

        return $jd;
    }

    /**
     * Lista dei pianeti
     */
    public function getPlanetsList(): array
    {
        return [
            0 => 'Sun',
            1 => 'Moon',
            2 => 'Mercury',
            3 => 'Venus',
            4 => 'Mars',
            5 => 'Jupiter',
            6 => 'Saturn',
            7 => 'Uranus',
            8 => 'Neptune',
            9 => 'Pluto',
        ];
    }

    /**
     * Lista città predefinite
     */
    public function getPredefinedCities(): array
    {
        return [
            ['name' => 'Roma', 'latitude' => 41.902782, 'longitude' => 12.496366],
            ['name' => 'Milano', 'latitude' => 45.464204, 'longitude' => 9.189982],
            ['name' => 'Napoli', 'latitude' => 40.851775, 'longitude' => 14.268124],
            ['name' => 'Torino', 'latitude' => 45.070312, 'longitude' => 7.686856],
            ['name' => 'Palermo', 'latitude' => 38.115688, 'longitude' => 13.361267],
            ['name' => 'Genova', 'latitude' => 44.405650, 'longitude' => 8.946256],
            ['name' => 'Bologna', 'latitude' => 44.494887, 'longitude' => 11.342616],
            ['name' => 'Firenze', 'latitude' => 43.769562, 'longitude' => 11.255814],
            ['name' => 'Bari', 'latitude' => 41.117143, 'longitude' => 16.871871],
            ['name' => 'Catania', 'latitude' => 37.507877, 'longitude' => 15.083030],
            ['name' => 'Venezia', 'latitude' => 45.440847, 'longitude' => 12.315515],
            ['name' => 'Verona', 'latitude' => 45.438496, 'longitude' => 10.992412],
            ['name' => 'Busto Arsizio', 'latitude' => 45.611932, 'longitude' => 8.851827],
        ];
    }

    /**
     * Ottiene coordinate da città o da valori diretti
     */
    public function getCoordinates(?string $city = null, ?float $latitude = null, ?float $longitude = null): ?array
    {
        // Se è fornita la città, cerca nelle predefinite
        if ($city) {
            foreach ($this->getPredefinedCities() as $c) {
                if (strtolower($c['name']) === strtolower($city)) {
                    return ['latitude' => $c['latitude'], 'longitude' => $c['longitude']];
                }
            }
            return null;
        }

        // Se sono fornite coordinate dirette
        if ($latitude !== null && $longitude !== null) {
            return ['latitude' => $latitude, 'longitude' => $longitude];
        }

        return null;
    }

    /**
     * Calcola la posizione di un pianeta usando il giorno giuliano
     */
    public function calculatePlanet(int $planetId, float $julianDay): ?array
    {
        $cmd = sprintf(
            '"%s" -j%.4f -p%d -eswe -edir"%s" 2>&1',
            $this->swetestPath,
            $julianDay,
            $planetId,
            $this->ephePath
        );

        exec($cmd, $output, $returnCode);

        $longitude = null;
        $latitude = null;

        foreach ($output as $line) {
            $line = trim($line);

            // Cerca la riga con il pianeta (es. "Sun 20°18'47.5585 -0° 0' 0.0874")
            if (preg_match('/(\d+)°\s*(\d+)\'\s*([\d.]+)["′]?\s+([+-]?\d+)°\s*(\d+)\'\s*([\d.]+)["′]?/', $line, $matches)) {
                $degrees = (float) $matches[1];
                $minutes = (float) $matches[2];
                $seconds = (float) $matches[3];
                $longitude = $degrees + $minutes / 60 + $seconds / 3600;

                $latDegrees = (float) $matches[4];
                $latMinutes = (float) $matches[5];
                $latSeconds = (float) $matches[6];
                $latitude = $latDegrees + $latMinutes / 60 + $latSeconds / 3600;
                break;
            }
        }

        if ($longitude !== null) {
            return [
                'longitude' => round($longitude, 4),
                'longitude_dms' => $this->decimalToDms($longitude),
                'latitude' => round($latitude, 4),
                'latitude_dms' => $this->decimalToDms($latitude),
            ];
        }

        return null;
    }

    /**
     * Calcola tutti i pianeti
     */
    public function calculateAllPlanets(float $julianDay, AstroServices $astroServices, string $locale = 'it'): array
    {
        $planetsList = $this->getPlanetsList();
        $planets = [];

        foreach ($planetsList as $id => $name) {
            $position = $this->calculatePlanet($id, $julianDay);

            if ($position !== null) {
                $sign = $astroServices->getSign($position['longitude'], $locale);

                $planets[] = [
                    'id' => $id,
                    'name' => $name,
                    'longitude' => $position['longitude'],
                    'longitude_dms' => $position['longitude_dms'],
                    'latitude' => $position['latitude'],
                    'latitude_dms' => $position['latitude_dms'],
                    'sign' => $sign,
                ];
            }
        }

        return $planets;
    }

    /**
     * Calcola case e ascendente usando il giorno giuliano
     */
    public function calculateHouses(float $julianDay, float $longitude, float $latitude, AstroServices $astroServices, string $locale = 'it'): array
    {
        $cmd = sprintf(
            '"%s" -j%.4f -house%.6f,%.6f,P -p -head 2>&1',
            $this->swetestPath,
            $julianDay,
            $longitude,
            $latitude
        );

        exec($cmd, $output, $returnCode);

        $result = [
            'houses' => [],
            'ascendant' => null,
            'midheaven' => null,
        ];

        foreach ($output as $line) {
            $line = trim($line);
            if (empty($line)) continue;
            
            // Cerca la riga "house X"
            if (preg_match('/^house\s+(\d+)\s+([^\s]+)\s+([^\s]+)/i', $line, $matches)) {
                $houseNum = (int) $matches[1];
                $cuspRaw = $matches[2];

                $long = $this->parseDmsToDecimal($cuspRaw);
                if ($long !== null) {
                    $result['houses']['house_' . $houseNum] = [
                        'longitude' => round($long, 4),
                        'longitude_dms' => $cuspRaw,
                        'sign' => $astroServices->getSign($long, $locale),
                    ];
                }
            }

            // Cerca la riga "Ascendant"
            if (preg_match('/^Ascendant\s+([^\s]+)\s+([^\s]+)/i', $line, $matches)) {
                $ascRaw = $matches[1];
                $long = $this->parseDmsToDecimal($ascRaw);
                if ($long !== null) {
                    $result['ascendant'] = [
                        'longitude' => round($long, 4),
                        'longitude_dms' => $ascRaw,
                        'sign' => $astroServices->getSign($long, $locale),
                    ];
                }
            }

            // Cerca la riga "MC"
            if (preg_match('/^MC\s+([^\s]+)\s+([^\s]+)/i', $line, $matches)) {
                $mcRaw = $matches[1];
                $long = $this->parseDmsToDecimal($mcRaw);
                if ($long !== null) {
                    $result['midheaven'] = [
                        'longitude' => round($long, 4),
                        'longitude_dms' => $mcRaw,
                        'sign' => $astroServices->getSign($long, $locale),
                    ];
                }
            }
        }

        return $result;
    }

    /**
     * Calcola la mappa natale completa
     */
    public function calculateNatalChart(
        string $date,
        string $time,
        float $latitude,
        float $longitude,
        AstroServices $astroServices,
        string $locale = 'it'
    ): array {
        // Parsing data GG-MM-AAAA
        $dateParts = explode('-', $date);
        $day = (int) $dateParts[0];
        $month = (int) $dateParts[1];
        $year = (int) $dateParts[2];

        // Parsing ora
        $timeParts = explode(':', $time);
        $hour = (float) $timeParts[0] + (float) $timeParts[1] / 60;

        // Calcola giorno giuliano
        $julianDay = $this->calculateJulianDay($year, $month, $day, $hour);

        // Calcola pianeti
        $planets = $this->calculateAllPlanets($julianDay, $astroServices, $locale);

        // Calcola case e ascendente
        $houses = $this->calculateHouses($julianDay, $longitude, $latitude, $astroServices, $locale);

        // Aggiungi il giorno giuliano al risultato
        $houses['julian_day'] = $julianDay;

        return [
            'planets' => $planets,
            'houses' => $houses,
        ];
    }

    /**
     * Converte gradi decimali in DMS
     */
    private function decimalToDms(float $decimal): string
    {
        $degrees = floor($decimal);
        $minutes = floor(($decimal - $degrees) * 60);
        $seconds = round(($decimal - $degrees - $minutes / 60) * 3600, 2);
        return sprintf("%d°%02d′%02.2f″", $degrees, $minutes, $seconds);
    }

    /**
     * Converte una stringa DMS (es. "304°54'24.4648") in gradi decimali
     */
    private function parseDmsToDecimal(string $dms): ?float
    {
        // Pattern per gradi, minuti, secondi
        if (preg_match('/(\d+)°(\d+)\'([\d.]+)"/', $dms, $matches)) {
            $degrees = (float) $matches[1];
            $minutes = (float) $matches[2];
            $seconds = (float) $matches[3];
            return $degrees + $minutes / 60 + $seconds / 3600;
        }

        // Pattern con spazio tra minuti e secondi (es. "240° 4'33.6260")
        if (preg_match('/(\d+)°\s*(\d+)\'([\d.]+)"/', $dms, $matches)) {
            $degrees = (float) $matches[1];
            $minutes = (float) $matches[2];
            $seconds = (float) $matches[3];
            return $degrees + $minutes / 60 + $seconds / 3600;
        }

        return null;
    }
}
