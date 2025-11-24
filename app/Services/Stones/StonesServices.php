<?php

namespace App\Services\Stones;

use Carbon\Carbon;
use DateTimeInterface;
use App\Models\Stones\StonesMeaning;

class StonesServices
{
  /**
   * @param array $numberToStones
   */
  protected array $numberToStones = [
    1 => ['Occhio di Tigre', 'Diaspro Rosso'],
    2 => ['Pietra di Luna', 'Selenite'],
    3 => ['Citrino', 'Ametista'],
    4 => ['Ematite', 'Ossidiana Nera'],
    5 => ['Labradorite', 'Fluorite'],
    6 => ['Quarzo Rosa', 'Rodonite'],
    7 => ['Ametista', 'Lapislazzuli'],
    8 => ['Onice Nera', 'Pirite'],
    9 => ['Quarzo Ialino', 'Tormalina Nera'],
  ];

  /**
   * @param array $numberToRunes
   */
  protected array $numberToRunes = [
    1 => ['Fehu', 'Sowilo'],
    2 => ['Uruz', 'Gebo'],
    3 => ['Ansuz', 'Kenaz'],
    4 => ['Othala', 'Eihwaz'],
    5 => ['Raidho', 'Laguz'],
    6 => ['Berkano', 'Ingwaz'],
    7 => ['Laguz', 'Perthro'],
    8 => ['Tiwaz', 'Hagalaz'],
    9 => ['Dagaz', 'Jera'],
  ];

  /**
   * Analyze function
   *
   * @param string $birthDate
   * @param string $referenceDate
   * @return array
   */
  public function analyze($birthDate, $referenceDate = null, string $language = 'it-IT'): array
  {
    $birth = $birthDate instanceof DateTimeInterface
      ? Carbon::instance($birthDate)
      : Carbon::parse($birthDate);

    $day = $referenceDate instanceof DateTimeInterface
      ? Carbon::instance($referenceDate)
      : ($referenceDate ? Carbon::parse($referenceDate) : Carbon::today());

    // normalizziamo la lingua in 'it' / 'en'
    $lang = $this->normalizeLanguage($language);

    // 1) Numero di nascita (Life Path)
    $lifePathRaw    = $this->sumDigitsFromDate($birth);
    $lifePathNumber = $this->reduceNumber($lifePathRaw);

    // 2) Numero della giornata
    $dayRaw    = $this->sumDigitsFromDate($day);
    $dayNumber = $this->reduceNumber($dayRaw);

    // 3) Numeri combinati
    $activeNumber    = $this->reduceNumber($lifePathNumber + $dayNumber);
    $shadowNumber    = $this->reduceNumber(abs($dayNumber - $lifePathNumber));
    $intensityNumber = $this->reduceNumber($lifePathNumber * $dayNumber);
    $guidanceNumber  = $this->calculateGuidanceNumber($lifePathNumber, $dayNumber);

    return [
      'meta' => [
        'birth_date'     => $birth->toDateString(),
        'reference_date' => $day->toDateString(),
        'language'       => $lang,
      ],

      'birth' => [
        'life_path_raw'    => $lifePathRaw,
        'life_path_number' => $lifePathNumber,
        'stones'           => $this->getStonesForNumber($lifePathNumber, $lang),
        'runes'            => $this->getRunesForNumber($lifePathNumber),
      ],

      'day' => [
        'day_raw'    => $dayRaw,
        'day_number' => $dayNumber,
        'stones'     => $this->getStonesForNumber($dayNumber, $lang),
        'runes'      => $this->getRunesForNumber($dayNumber),
      ],

      'combined' => [
        'active' => [
          'number' => $activeNumber,
          'type'   => 'attivo', // (somma nascita + giorno)
          'stones' => $this->getStonesForNumber($activeNumber, $lang),
          'runes'  => $this->getRunesForNumber($activeNumber),
        ],
        'shadow' => [
          'number' => $shadowNumber,
          'type'   => 'ombra', //  (differenza assoluta)
          'stones' => $this->getStonesForNumber($shadowNumber, $lang),
          'runes'  => $this->getRunesForNumber($shadowNumber),
        ],
        'intensity' => [
          'number' => $intensityNumber,
          'type'   => 'intensità', // (prodotto)
          'stones' => $this->getStonesForNumber($intensityNumber, $lang),
          'runes'  => $this->getRunesForNumber($intensityNumber),
        ],
        'guidance' => [
          'number' => $guidanceNumber,
          'type'   => 'guida', // (divisione simbolica)
          'stones' => $this->getStonesForNumber($guidanceNumber, $lang),
          'runes'  => $this->getRunesForNumber($guidanceNumber),
        ],
      ],
    ];
  }


  /**
   * Sum Digits From Date function
   * Somma le cifre di una data (giorno + mese + anno).
   *
   * @param Carbon $date
   * @return integer
   */
  protected function sumDigitsFromDate(Carbon $date): int
  {
    $digits = str_replace('-', '', $date->format('Y-m-d'));
    $sum    = 0;

    for ($i = 0; $i < strlen($digits); $i++) {
      $sum += (int) $digits[$i];
    }

    return $sum;
  }

  /**
   * Reduce Number function
   * Riduzione numerologica in stile pitagorico
   * - somma delle cifre fino a 1-9
   * - mantiene 11, 22, 33 come "master numbers"
   *
   * @param integer $number
   * @return integer
   */
  protected function reduceNumber(int $number): int
  {
    // Se vuoi ignorare i master numbers, commenta questo blocco
    if (in_array($number, [11, 22, 33], true)) {
      return $number;
    }

    while ($number > 9) {
      $digits = str_split((string) $number);
      $number = array_sum(array_map('intval', $digits));

      if (in_array($number, [11, 22, 33], true)) {
        break;
      }
    }

    return $number;
  }

  /**
   * Calculate Guidance Number function
   *
   * @param integer $lifePath
   * @param integer $dayNumber
   * @return integer
   */
  protected function calculateGuidanceNumber(int $lifePath, int $dayNumber): int
  {
    if ($lifePath === 0) {
      return 0;
    }

    $ratio = $dayNumber / $lifePath;
    // manteniamo una cifra decimale, es: 7/3 = 2.3
    $formatted = number_format($ratio, 1, '.', '');
    // togliamo il punto, es: "2.3" => "23"
    $digitsOnly = str_replace('.', '', $formatted);
    // sommiamo le cifre e riduciamo
    $sum = array_sum(array_map('intval', str_split($digitsOnly)));

    return $this->reduceNumber($sum);
  }

  /**
   * Get Stones For Number function
   *
   * @param integer $number
   * @return array
   */
  public function getStonesForNumber(int $number, string $language = 'it'): ?array
  {
    /*
    $reduced = $this->reduceNumber($number);
    // Se il reduceNumber restituisce 11/22/33, puoi decidere di mappare al singolo digit
    if ($reduced > 9) {
      $reduced = $this->reduceNumber($reduced);
    }

    return $this->numberToStones[$reduced] ?? [];
    */

    $lang = $this->normalizeLanguage($language);

    $stones = StonesMeaning::with(['translations' => function ($q) use ($lang) {
      $q->where('language', $lang);
    }])
      ->where('number', $number)
      ->first();

    if ($stones->isEmpty()) {
      return [];
    }

    return $stones->map(function (StonesMeaning $stone) {
      $t = $stone->translations->first();
      if (! $t) {
        return null;
      }

      return [
        'number'       => $stone->number,
        'hardness'     => $stone->hardness,
        'name'         => $t->name,
        'origin'       => $t->origin,
        'type'         => $t->type,
        'color'        => $t->color,
        'chakra'       => $t->chakra,
        'zodiac_signs' => $t->zodiac_signs,
        'description'  => $t->description,
        'usage'        => $t->usage,
        'powers'       => $t->powers,
      ];
    })
      ->filter()        // toglie eventuali null (se mancano traduzioni)
      ->values()
      ->toArray();
  }

  /**
   * Get Runes For Number function
   *
   * @param integer $number
   * @return array
   */
  public function getRunesForNumber(int $number): array
  {
    $reduced = $this->reduceNumber($number);

    if ($reduced > 9) {
      $reduced = $this->reduceNumber($reduced);
    }

    return $this->numberToRunes[$reduced] ?? [];
  }

  /**
   * Normalize Language function
   *
   * @param string $language
   * @return string
   */
  protected function normalizeLanguage(string $language): string
  {
    $language = strtolower($language);

    return match ($language) {
      'it', 'it-it' => 'it',
      'en', 'en-us' => 'en',
      default       => 'it',
    };
  }
}
