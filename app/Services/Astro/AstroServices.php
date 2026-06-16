<?php

namespace App\Services\Astro;

use DateTimeInterface;
use InvalidArgumentException;

/**
 * Servizio per il calcolo di dati astrologici di base
 * 
 * Fornisce funzioni per calcolare posizioni di Sole, Luna, ascendente
 * e segni zodiacali con supporto multilingua.
 * 
 * NOTA: I calcoli sono approssimativi e utilizzano algoritmi semplificati.
 * Per uso professionale/medico si consigliano librerie specializzate.
 */
class AstroServices
{
    /** @var float Inclinazione dell'asse terrestre in gradi (obliquità dell'eclittica) */
    private const OBLIQUITY = 23.439281;

    /** @var float Giorno giuliano dell'epoca J2000.0 */
    private const J2000 = 2451545.0;

    /**
     * Calcola il giorno giuliano per una data e ora date.
     * 
     * Algoritmo valido per date dal 1 marzo dell'anno -4711 (4712 a.C.) in poi.
     *
     * @param int $year Anno (es. 1990)
     * @param int $month Mese (1-12)
     * @param int $day Giorno (1-31)
     * @param float $hour Ora del giorno in formato decimale (es. 14.5 per 14:30)
     * @return float Giorno giuliano
     */
    public function julianDay(int $year, int $month, int $day, float $hour = 0): float
    {
        // Se il mese è gennaio o febbraio, si considera l'anno precedente
        if ($month <= 2) {
            $year -= 1;
            $month += 12;
        }

        $a = (int) floor($year / 100);
        $b = 2 - $a + (int) floor($a / 4);

        $jd = floor(365.25 * ($year + 4716)) 
            + floor(30.6001 * ($month + 1)) 
            + $day 
            + $hour / 24 
            - 1524.5;

        // Correzione per date gregoriane (dal 15 ottobre 1582)
        if ($jd >= 2299160) {
            $jd = floor(365.25 * ($year + 4716)) 
                + floor(30.6001 * ($month + 1)) 
                + $day 
                + $hour / 24 
                + $b 
                - 1524.5;
        }

        return $jd;
    }

    /**
     * Calcola la longitudine eclittica del Sole.
     * 
     * Utilizza algoritmi di approssimazione basati sulla meccanica celeste.
     * Precisione: ~0.01° per il periodo 1900-2100.
     *
     * @param float $julianDay Giorno giuliano
     * @return float Longitudine del Sole in gradi (0-360)
     */
    public function sunLongitude(float $julianDay): float
    {
        $T = ($julianDay - self::J2000) / 36525.0;

        // Longitudine media del Sole
        $L0 = 280.46646 + 36000.76983 * $T + 0.0003032 * $T * $T;
        $L0 = fmod($L0, 360);

        // Anomalia media del Sole
        $M = 357.52911 + 35999.05029 * $T - 0.0001537 * $T * $T;
        $M = fmod($M, 360) * M_PI / 180;

        // Equazione del centro
        $C = (1.914602 - 0.004817 * $T - 0.000014 * $T * $T) * sin($M)
            + (0.019993 - 0.000101 * $T) * sin(2 * $M)
            + 0.000289 * sin(3 * $M);

        // Longitudine vera
        $longitude = $L0 + $C;

        return fmod($longitude + 360, 360);
    }

    /**
     * Calcola la longitudine eclittica approssimativa della Luna.
     * 
     * AVVERTENZA: Questa è una versione semplificata.
     * L'errore può arrivare a ±1-2 gradi.
     * Per calcoli professionali usare Swiss Ephemeris.
     *
     * @param float $julianDay Giorno giuliano
     * @return float Longitudine della Luna in gradi (0-360)
     */
    public function moonLongitude(float $julianDay): float
    {
        $T = ($julianDay - self::J2000) / 36525.0;

        // Longitudine media della Luna
        $Lm = 218.3164477 
            + 481267.88123421 * $T 
            - 0.0015786 * $T * $T 
            + ($T * $T * $T) / 538841.0 
            - ($T * $T * $T * $T) / 65194000.0;

        // Anomalia media (elongazione media della Luna dal Sole)
        $D = 297.8501921 
            + 445267.1114034 * $T 
            - 0.0018819 * $T * $T 
            + ($T * $T * $T) / 545868.0 
            - ($T * $T * $T * $T) / 113065000.0;

        $Lm = fmod($Lm, 360);
        $D = fmod($D, 360);

        // Equazione del centro (correzione principale)
        $correction = 6.289 * sin(deg2rad($D));
        $longitude = $Lm + $correction;

        return fmod($longitude + 360, 360);
    }

    /**
     * Calcola il tempo siderale al meridiano di Greenwich.
     * 
     * Il tempo siderale è l'angolo orario dell'equinozio di primavera,
     * necessario per il calcolo delle case astrologiche.
     *
     * @param float $julianDay Giorno giuliano
     * @return float Tempo siderale in gradi (0-360)
     */
    public function siderealTime(float $julianDay): float
    {
        $T = ($julianDay - self::J2000) / 36525.0;
        
        $theta = 280.46061837 
            + 360.98564736629 * ($julianDay - self::J2000) 
            + 0.000387933 * $T * $T 
            - ($T * $T * $T) / 38710000.0;
        
        return fmod($theta + 360, 360);
    }

    /**
     * Calcola la longitudine dell'ascendente.
     * 
     * L'ascendente è il segno che sorge all'orizzonte orientale
     * nel momento e luogo della nascita.
     *
     * @param float $siderealTime Tempo siderale in gradi
     * @param float $latitude Latitudine del luogo in gradi (-90 a +90)
     * @param float $obliquity Obliquità dell'eclittica (default 23.439281°)
     * @return float Longitudine dell'ascendente in gradi (0-360)
     */
    public function ascendant(float $siderealTime, float $latitude, float $obliquity = self::OBLIQUITY): float
    {
        $tanLat = tan(deg2rad($latitude));
        $tanEps = tan(deg2rad($obliquity));

        $ra = rad2deg(atan2(-$tanLat, sin(deg2rad($siderealTime)) * $tanEps));
        $asc = $siderealTime - $ra;

        return fmod($asc + 360, 360);
    }

    /**
     * Calcola la mappa natale completa.
     * 
     * Restituisce posizioni di Sole, Luna e ascendente con i rispettivi segni.
     *
     * @param DateTimeInterface $datetime Data e ora della nascita
     * @param float $latitude Latitudine del luogo (gradi decimali, -90 a +90)
     * @param float $longitude Longitudine del luogo (gradi decimali, -180 a +180)
     * @param string $locale Lingua per i nomi dei segni (it, en, es, fr, de, la, he)
     * @return array Risultato con success e data
     */
    public function calculateNatalChart(
        DateTimeInterface $datetime,
        float $latitude,
        float $longitude,
        string $locale = 'it'
    ): array {
        // Validazioni base
        if ($latitude < -90 || $latitude > 90) {
            throw new InvalidArgumentException("Latitudine non valida: {$latitude}");
        }
        if ($longitude < -180 || $longitude > 180) {
            throw new InvalidArgumentException("Longitudine non valida: {$longitude}");
        }

        // Calcola giorno giuliano
        $hour = (float) $datetime->format('H') + (float) $datetime->format('i') / 60;
        $julianDay = $this->julianDay(
            (int) $datetime->format('Y'),
            (int) $datetime->format('m'),
            (int) $datetime->format('d'),
            $hour
        );

        // Calcolo posizioni celesti
        $sunLong = $this->sunLongitude($julianDay);
        $moonLong = $this->moonLongitude($julianDay);
        $siderealTime = $this->siderealTime($julianDay);
        $ascLong = $this->ascendant($siderealTime, $latitude);

        return [
            'success' => true,
            'data' => [
                'datetime' => $datetime->format('Y-m-d H:i:s'),
                'timezone' => $datetime->getTimezone()->getName(),
                'coordinates' => [
                    'latitude' => $latitude,
                    'longitude' => $longitude
                ],
                'sun' => $this->getSign($sunLong, $locale),
                'moon' => $this->getSign($moonLong, $locale),
                'ascendant' => $this->getSign($ascLong, $locale),
                'julian_day' => $julianDay,
                'sidereal_time' => round($siderealTime, 4)
            ]
        ];
    }

    /**
     * Ottiene le informazioni del segno zodiacale dalla longitudine.
     *
     * @param float $longitude Longitudine in gradi (0-360)
     * @param string $locale Lingua desiderata (it, en, es, fr, de, la, he)
     * @return array Informazioni del segno zodiacale
     */
    public function getSign(float $longitude, string $locale = 'it'): array
    {
        // Normalizza longitudine
        $longitude = fmod($longitude + 360, 360);
        
        $signs = $this->getSignsList($locale);
        $index = (int) floor($longitude / 30);
        $degrees = fmod($longitude, 30);

        return [
            'name' => $signs[$index],
            'index' => $index,
            'degrees' => round($degrees, 4),
            'longitude' => round($longitude, 4),
            'element' => $this->getSignElement($index, $locale),
            'modality' => $this->getSignModality($index, $locale)
        ];
    }

    /**
     * Restituisce la lista dei segni zodiacali per lingua.
     *
     * @param string $locale Codice lingua
     * @return array<string> Array di 12 nomi dei segni
     */
    private function getSignsList(string $locale): array
    {
        $signs = [
            'it' => ['Ariete', 'Toro', 'Gemelli', 'Cancro', 'Leone', 'Vergine', 'Bilancia', 'Scorpione', 'Sagittario', 'Capricorno', 'Acquario', 'Pesci'],
            'en' => ['Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn', 'Aquarius', 'Pisces'],
            'es' => ['Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario', 'Capricornio', 'Acuario', 'Piscis'],
            'fr' => ['Bélier', 'Taureau', 'Gémeaux', 'Cancer', 'Lion', 'Vierge', 'Balance', 'Scorpion', 'Sagittaire', 'Capricorne', 'Verseau', 'Poissons'],
            'de' => ['Widder', 'Stier', 'Zwillinge', 'Krebs', 'Löwe', 'Jungfrau', 'Waage', 'Skorpion', 'Schütze', 'Steinbock', 'Wassermann', 'Fische'],
            'la' => ['Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricornus', 'Aquarius', 'Pisces'],
            'he' => ['טלה', 'שור', 'תאומים', 'סרטן', 'אריה', 'בתולה', 'מאזניים', 'עקרב', 'קשת', 'גדי', 'דלי', 'דגים']
        ];

        return $signs[$locale] ?? $signs['it'];
    }

    /**
     * Restituisce l'elemento del segno zodiacale (Fuoco, Terra, Aria, Acqua).
     *
     * @param int $index Indice del segno (0-11)
     * @param string $locale Lingua desiderata
     * @return string Nome dell'elemento nella lingua richiesta
     */
    private function getSignElement(int $index, string $locale): string
    {
        $elements = [
            'it' => ['Fuoco', 'Terra', 'Aria', 'Acqua'],
            'en' => ['Fire', 'Earth', 'Air', 'Water'],
            'es' => ['Fuego', 'Tierra', 'Aire', 'Agua'],
            'fr' => ['Feu', 'Terre', 'Air', 'Eau'],
            'de' => ['Feuer', 'Erde', 'Luft', 'Wasser'],
            'la' => ['Ignis', 'Terra', 'Aer', 'Aqua'],
            'he' => ['אש', 'אדמה', 'אוויר', 'מים']
        ];

        // Mappa: indice segno → elemento (0=Fuoco, 1=Terra, 2=Aria, 3=Acqua)
        $map = [0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3];
        $elementIndex = $map[$index];

        $list = $elements[$locale] ?? $elements['it'];
        return $list[$elementIndex];
    }

    /**
     * Restituisce la modalità del segno zodiacale (Cardinale, Fisso, Mutabile).
     *
     * @param int $index Indice del segno (0-11)
     * @param string $locale Lingua desiderata
     * @return string Nome della modalità nella lingua richiesta
     */
    private function getSignModality(int $index, string $locale): string
    {
        $modalities = [
            'it' => ['Cardinale', 'Fisso', 'Mutabile'],
            'en' => ['Cardinal', 'Fixed', 'Mutable'],
            'es' => ['Cardinal', 'Fijo', 'Mutable'],
            'fr' => ['Cardinal', 'Fixe', 'Mutable'],
            'de' => ['Kardinal', 'Fix', 'Mutabel'],
            'la' => ['Cardinalis', 'Fixa', 'Mobilis'],
            'he' => ['ראשי', 'קבוע', 'משתנה']
        ];

        // Mappa: indice segno → modalità (0=Cardinale, 1=Fisso, 2=Mutabile)
        $map = [0, 1, 2, 0, 1, 2, 0, 1, 2, 0, 1, 2];
        $modalityIndex = $map[$index];

        $list = $modalities[$locale] ?? $modalities['it'];
        return $list[$modalityIndex];
    }
}