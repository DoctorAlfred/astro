<?php

namespace App\Services\Numerology;

use Carbon\Carbon;

class NumerologyServices
{
  public function calculateLifePath(string $birthDate): int
  {
    $digits = str_split(Carbon::parse($birthDate)->format('Ymd'));
    return $this->reduceToOneDigit(array_sum($digits));
  }

  public function calculateExpression(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMapping();
    $text = mb_strtoupper($firstName . $lastName);
    $sum = 0;
    foreach (mb_str_split($text) as $char) {
      if (isset($mapping[$char])) $sum += $mapping[$char];
    }
    return $this->reduceToOneDigit($sum);
  }

  public function calculateSoulUrge(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMapping();
    $vowels  = ['A', 'E', 'I', 'O', 'U', 'Y'];
    $text    = mb_strtoupper($firstName . $lastName);
    $sum     = 0;
    foreach (mb_str_split($text) as $char) {
      if (in_array($char, $vowels) && isset($mapping[$char])) {
        $sum += $mapping[$char];
      }
    }
    return $this->reduceToOneDigit($sum);
  }

  public function calculatePersonality(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMapping();
    $consonants = array_diff(
      mb_str_split(mb_strtoupper($firstName . $lastName)),
      ['A', 'E', 'I', 'O', 'U', 'Y']
    );
    $sum = 0;
    foreach ($consonants as $char) {
      if (isset($mapping[$char])) $sum += $mapping[$char];
    }
    return $this->reduceToOneDigit($sum);
  }

  public function calculateMaturity(string $birthDate, string $firstName, string $lastName): int
  {
    $lifePath   = $this->calculateLifePath($birthDate);
    $expression = $this->calculateExpression($firstName, $lastName);
    return $this->reduceToOneDigit($lifePath + $expression);
  }

  public function calculatePinnaclesAndChallenges(string $birthDate): array
  {
    // Qui implementi la logica per i 4 Pinnacles e 3 Challenge basati sul Life Path
    // Esempio stub:
    $lifePath = $this->calculateLifePath($birthDate);
    return [
      'pinnacle_1' => $this->reduceToOneDigit($lifePath + 1),
      'pinnacle_2' => $this->reduceToOneDigit($lifePath + 2),
      // …
      'challenge_1' => abs($lifePath - 1),
      // …
    ];
  }

  /**
   * Restituisce TUTTA la matrice NAI.
   */
  public function calculateNAIMatrix(string $birthDate, string $firstName, string $lastName): array
  {
    return [
      'life_path'    => $this->calculateLifePath($birthDate),
      'expression'   => $this->calculateExpression($firstName, $lastName),
      'soul_urge'    => $this->calculateSoulUrge($firstName, $lastName),
      'personality'  => $this->calculatePersonality($firstName, $lastName),
      'maturity'     => $this->calculateMaturity($birthDate, $firstName, $lastName),
      'pinnacles'    => $this->calculatePinnaclesAndChallenges($birthDate)['pinnacles'] ?? [],
      'challenges'   => $this->calculatePinnaclesAndChallenges($birthDate)['challenges'] ?? [],
    ];
  }

  











  /**
   * Calculate the NAI number from a birth date (YYYY-MM-DD).
   *
   * @param  string  $birthDate
   * @return int
   */
  public function calculateNAIFromDate(string $birthDate): int
  {
    // Normalize date to YYYYMMDD
    $dateString = Carbon::parse($birthDate)->format('dmY');
    $sum = array_sum(str_split($dateString));

    return $this->reduceToOneDigit($sum);
  }

  /**
   * Calculate the NAI number from first name + last name.
   *
   * @param string $firstName
   * @param string $lastName
   * @return int
   */
  public function calculateNAIFromName(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMapping();
    $text = mb_strtoupper($firstName . $lastName);
    $sum = 0;

    foreach (preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY) as $char) {
      if (isset($mapping[$char])) {
        $sum += $mapping[$char];
      }
    }

    return $this->reduceToOneDigit($sum);
  }

  /**
   * Reduce a number to a single digit (1–9) by iterative digit-sum.
   *
   * @param  int $number
   * @return int
   */
  private function reduceToOneDigit(int $number): int
  {
    if ($number >= 1 && $number <= 9) {
      return $number;
    }

    $digits = str_split((string) $number);
    $sum = array_sum($digits);

    return $this->reduceToOneDigit($sum);
  }

  /**
   * Return the letter→number mapping (Chaldean style).
   *
   * @return array<string,int>
   */
  private function getLetterMapping(): array
  {
    return [
      'A' => 1,
      'B' => 2,
      'C' => 3,
      'D' => 4,
      'E' => 5,
      'F' => 8,
      'G' => 3,
      'H' => 5,
      'I' => 1,
      'J' => 1,
      'K' => 2,
      'L' => 3,
      'M' => 4,
      'N' => 5,
      'O' => 7,
      'P' => 8,
      'Q' => 1,
      'R' => 2,
      'S' => 3,
      'T' => 4,
      'U' => 6,
      'V' => 6,
      'W' => 6,
      'X' => 5,
      'Y' => 1,
      'Z' => 7,
    ];
  }
}
