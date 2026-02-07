<?php

namespace App\Services\Numerology;

use App\Models\Numbers\TantricMeaning;
use App\Models\Numbers\TantricYearlyCycle;

class TantricServices
{
  /**
   * Calculate tantric numerology values with meanings
   *
   * @param array $data
   * @param string $locale
   * @return array
   */
  public function calculateWithMeanings(array $data, string $locale = 'it'): array
  {
    $date = explode('-', $data['birth_date']);

    $year  = (int) $date[0];
    $month = (int) $date[1];
    $day   = (int) $date[2];

    $yearDigits = array_sum(str_split(substr((string) $year, -2)));
    $destinyDigits = array_sum(str_split((string) $year));
    $gift     = $this->reduceToTantric($yearDigits);
    $destiny  = $this->reduceToTantric($destinyDigits);

    $numbers = [
      'soul_number'    => ['value' => $this->reduceToTantric($day), 'focus' => 'soul'],
      'karma_number'   => ['value' => $this->reduceToTantric($month), 'focus' => 'karma'],
      'gift_number'    => ['value' => $gift, 'focus' => 'gift'],
      'destiny_number' => ['value' => $destiny, 'focus' => 'destiny'],
      'path_number'    => ['value' => $this->reduceToTantric(
        array_sum(str_split($day . $month . $year))
      ), 'focus' => 'path'],
    ];

    $result = [];

    foreach ($numbers as $key => $config) {
      $meaning = TantricMeaning::query()
        ->where('number', $config['value'])
        ->where('locale', $locale)
        ->first();

      $result[$key] = [
        'value'        => $config['value'],
        'focus'        => $config['focus'],
        'name'         => $meaning?->name,
        'body'         => $meaning?->body,
        'meaning'      => $meaning?->meaning,
        'applications' => $meaning?->applications,
        'guidance'     => $meaning?->applications[$config['focus']] ?? null,
      ];
    }

    return $result;
  }

  /**
   * Reduce number to tantric range (1–11)
   *
   * @param int $number
   * @return int
   */
  protected function reduceToTantric(int $number): int
  {
    while ($number > 11) {
      $number = array_sum(str_split((string) $number));
    }

    return $number === 0 ? 11 : $number;
  }

  /**
   * Get Yearly Cycle function
   *
   * @param string $birthDate
   * @param string $locale
   * @return array
   */
  public function getYearlyCycle(string $birthDate, string $locale = 'it'): array
  {
    $birthDate = \Carbon\Carbon::createFromFormat('Y-m-d', $birthDate);
    $now = now();

    $currentYear = $now->year;
    $birthdayThisYear = $birthDate->copy()->year($currentYear);

    // Se non hai ancora compiuto gli anni, l'anno di riferimento è quello precedente
    $referenceYear = $now->lt($birthdayThisYear)
      ? $currentYear - 1
      : $currentYear;

    // Somma tantrica: giorno + mese + cifre dell'anno
    $sum = array_sum(str_split(
      $birthDate->day . $birthDate->month . $referenceYear
    ));

    $value = $this->reduceToTantric($sum);

    $meaning = \App\Models\Numbers\TantricMeaning::query()
      ->where('number', $value)
      ->where('locale', $locale)
      ->first();

    $cycle = TantricYearlyCycle::query()
      ->where('number', $value)
      ->where('locale', $locale)
      ->first();

    return [
      'year'   => $referenceYear,
      'value'  => $value,
      'name'   => $meaning?->name,
      'body'   => $meaning?->body,
      'energy' => $cycle?->energy,
      'advice' => $cycle?->advice,
    ];
  }
}
