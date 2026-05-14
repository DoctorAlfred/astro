<?php

namespace App\Services\Numerology;

use Carbon\Carbon;
use App\Models\Numbers\NaiMeanings;

class NaiServices
{
  /**
   * Ceaning function
   *
   * @param string $lang
   * @param string $code
   * @param int    $number
   * @return array|null
   */
  private function meaning(string $lang, string $name, int $number): ?array
  {

    $m = NaiMeanings::where('lang', $lang)
      ->where('name', $name)
      ->where('number', $number)
      ->first();

    return [
      'number'      => $number,
      'description' => $m->description ?? null,
      'meta'        => $m->meta        ?? null,
    ];
  }

  /**
   * Calculate Life Path function
   *
   * @param string $birthDate
   * @return integer
   */
  public function calculateLifePath(string $birthDate): int
  {
    $digits = str_split(Carbon::parse($birthDate)->format('Ymd'));
    return $this->reduceToOneDigit(array_sum($digits));
  }

  /**
   * Calculate Expression function
   *
   * @param string $firstName
   * @param string $lastName
   * @return integer
   */
  public function calculateExpression(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMappingCaldeo();
    $text = mb_strtoupper($firstName . $lastName);
    $sum = 0;
    foreach (mb_str_split($text) as $char) {
      if (isset($mapping[$char])) $sum += $mapping[$char];
    }
    return $this->reduceToOneDigit($sum);
  }

  /**
   * Calculate Soul Urge function
   *
   * @param string $firstName
   * @param string $lastName
   * @return integer
   */
  public function calculateSoulUrge(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMappingCaldeo();
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

  /**
   * Calculate Personality function
   *
   * @param string $firstName
   * @param string $lastName
   * @return integer
   */
  public function calculatePersonality(string $firstName, string $lastName): int
  {
    $mapping = $this->getLetterMappingCaldeo();
    $vowels = ['A', 'E', 'I', 'O', 'U', 'Y'];
    $text = mb_strtoupper($firstName . $lastName);
    $sum = 0;

    foreach (mb_str_split($text) as $char) {
      if (!in_array($char, $vowels) && isset($mapping[$char])) {
        $sum += $mapping[$char];
      }
    }
    return $this->reduceToOneDigit($sum);
  }

  /**
   * Calculate Maturity function
   *
   * @param string $birthDate
   * @param string $firstName
   * @param string $lastName
   * @return integer
   */
  public function calculateMaturity(string $birthDate, string $firstName, string $lastName): int
  {
    $lifePath   = $this->calculateLifePath($birthDate);
    $expression = $this->calculateExpression($firstName, $lastName);
    return $this->reduceToOneDigit($lifePath + $expression);
  }

  /**
   * Calculate Pinnacles And Challenges function
   *
   * @param string $birthDate
   * @return array
   */
  public function calculatePinnaclesAndChallenges(string $birthDate): array
  {
    $lifePath = $this->calculateLifePath($birthDate);

    $pinnacles = [
      $this->reduceToOneDigit($lifePath + 1),
      $this->reduceToOneDigit($lifePath + 2),
      $this->reduceToOneDigit($lifePath + 3),
      $this->reduceToOneDigit($lifePath + 4),
    ];

    $first = $this->reduceToOneDigit(abs($lifePath - 1));
    $second = $this->reduceToOneDigit(abs($lifePath - 2));
    $third = $this->reduceToOneDigit(abs($first - $second));
    $fourth = $this->reduceToOneDigit(abs($lifePath - 3));

    $challenges = [$first, $second, $third, $fourth];

    return [
      'pinnacles'  => $pinnacles,
      'challenges' => $challenges,
    ];
  }

  /**
   * Calculate NAI Matrix function
   *
   * @param string $birthDate
   * @param string $firstName
   * @param string $lastName
   * @param string|null $language
   * @return array
   */
  public function calculateNAIMatrix(string $birthDate, string $firstName, string $lastName, ?string $language = null): array
  {
    $lang = $language ? strtolower($language) : 'it';
    $birthDate = Carbon::createFromFormat('d-m-Y', $birthDate)->format('Y-m-d');

    $pc         = $this->calculatePinnaclesAndChallenges($birthDate);

    $lifePathNum    = $this->calculateLifePath($birthDate);
    $expressionNum  = $this->calculateExpression($firstName, $lastName);
    $soulUrgeNum    = $this->calculateSoulUrge($firstName, $lastName);
    $personalityNum = $this->calculatePersonality($firstName, $lastName);
    $maturityNum    = $this->calculateMaturity($birthDate, $firstName, $lastName);

    $payload = [
      'lifePath'    => $this->meaning($lang, 'lifePath',    $lifePathNum),
      'expression'  => $this->meaning($lang, 'expression',  $expressionNum),
      'soulUrge'    => $this->meaning($lang, 'soulUrge',    $soulUrgeNum),
      'personality' => $this->meaning($lang, 'personality', $personalityNum),
      'maturity'    => $this->meaning($lang, 'maturity',    $maturityNum),
      'pinnacles'   => array_map(fn($n) => $this->meaning($lang, 'pinnacles', $n), $pc['pinnacles']),
      'challenges'  => array_map(fn($n) => $this->meaning($lang, 'challenges', $n), $pc['challenges']),
    ];

    return $payload;
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
    $mapping = $this->getLetterMappingCaldeo();
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
    $number = abs($number);

    if ($number === 0) {
      return 0;
    }

    while ($number > 9) {
      $number = array_sum(str_split((string) $number));
    }

    return $number;
  }

  /**
   * Return the letter→number mapping (Chaldean style).
   *
   * @return array<string,int>
   */
  private function getLetterMappingCaldeo(): array
  {
    return [
      'A' => 1,
      'I' => 1,
      'J' => 1,
      'Q' => 1,
      'Y' => 1,
      'B' => 2,
      'K' => 2,
      'R' => 2,
      'C' => 3,
      'G' => 3,
      'L' => 3,
      'S' => 3,
      'D' => 4,
      'M' => 4,
      'T' => 4,
      'E' => 5,
      'H' => 5,
      'N' => 5,
      'X' => 5,
      'U' => 6,
      'V' => 6,
      'W' => 6,
      'O' => 7,
      'Z' => 7,
      'F' => 8,
      'P' => 8,
    ];
  }
}
