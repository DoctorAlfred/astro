<?php

namespace App\Services\Numerology;

use App\Models\Numbers\PythagoricMeaning;

class PythagoreanServices
{
  /**
   * Letter Map to number variable
   * Mappa Pitagorica lettere → numeri.
   *
   * @var array
   */
  private array $letterMap = [
    1 => ['A', 'J', 'S'],
    2 => ['B', 'K', 'T'],
    3 => ['C', 'L', 'U'],
    4 => ['D', 'M', 'V'],
    5 => ['E', 'N', 'W'],
    6 => ['F', 'O', 'X'],
    7 => ['G', 'P', 'Y'],
    8 => ['H', 'Q', 'Z'],
    9 => ['I', 'R'],
  ];

  /**
   * Vocals only variable
   *
   * @var array
   */
  private array $vowels = ['A', 'E', 'I', 'O', 'U', 'Y'];

  /**
   * Calculate function
   * Entry point: calcola i numeri pitagorici principali.
   *
   * @param array{first_name:string,last_name:string,birth_date:string} $data
   * @return array
   */
  public function calculate(array $data): array
  {
    $firstName = $data['first_name'] ?? '';
    $lastName  = $data['last_name'] ?? '';
    $birthDate = $data['birth_date'] ?? '';

    $fullName = trim($firstName . ' ' . $lastName);
    // --- Life Path (Percorso di vita) ---
    $lifePath = $this->calculateLifePath($birthDate);
    // --- Expression (Destino) ---
    $expressionNumber = $this->calculateExpressionNumber($fullName);
    // --- Soul Urge (Anima) ---
    $soulUrgeNumber = $this->calculateSoulUrgeNumber($fullName);
    // --- Personality (Personalità) ---
    $personalityNumber = $this->calculatePersonalityNumber($fullName);
    // --- Birth Day (Giorno di Nasciata) ---
    $birthDayNumber    = $this->calculateBirthDayNumber($birthDate);
    // --- Maturity (Maturità) ---
    $maturityNumber    = $this->calculateMaturityNumber($lifePath, $expressionNumber);
    // --- Balance Name (Prime lettere dei nomi) ---
    $balanceNumber     = $this->calculateBalanceNumber($firstName, $lastName);
    // --- Karmic Lesson (Lezione Karmica, numeri da 1 a 9 che mancano nel nome completo) ---
    $karmicLessons     = $this->calculateKarmicLessons($fullName);
    // --- Hidden Passion (Passioni nascoste numeri (1-9) più frequenti nel nome.) ---
    $hiddenPassion     = $this->calculateHiddenPassion($fullName);

    return [
      'life_path'          => $lifePath,
      'expression_number'  => $expressionNumber,
      'soul_urge_number'   => $soulUrgeNumber,
      'personality_number' => $personalityNumber,
      'birth_day_number'   => $birthDayNumber,
      'maturity_number'    => $maturityNumber,
      'balance_number'     => $balanceNumber,
      'karmic_lessons'     => $karmicLessons,
      'hidden_passion'     => $hiddenPassion,
    ];
  }

  /**
   * Calculate Life Path function
   * Calcolo del Percorso di vita da data di nascita (YYYY-MM-DD).
   *
   * @param string $birthDate
   * @return integer|null
   */
  private function calculateLifePath(string $birthDate): ?int
  {
    if (empty($birthDate)) {
      return null;
    }
    // Split data
    [$year, $month, $day] = explode('-', $birthDate);

    $sum = $this->sumDigits((int) $year)
      + $this->sumDigits((int) $month)
      + $this->sumDigits((int) $day);

    return $this->reduceNumber($sum);
  }

  /**
   * Calculate Expression Number function
   * Calcolo Expression Number dal nome completo.
   *
   * @param string $fullName
   * @return integer|null
   */
  private function calculateExpressionNumber(string $fullName): ?int
  {
    $normalized = $this->normalizeString($fullName);
    if ($normalized === '') {
      return null;
    }

    $sum = 0;
    foreach (mb_str_split($normalized) as $char) {
      $sum += $this->letterToNumber($char);
    }

    return $this->reduceNumber($sum);
  }

  /**
   * Calculate Soul Urge Number function
   * Calcolo Soul Urge Number (solo vocali).
   *
   * @param string $fullName
   * @return integer|null
   */
  private function calculateSoulUrgeNumber(string $fullName): ?int
  {
    $normalized = $this->normalizeString($fullName);
    if ($normalized === '') {
      return null;
    }

    $sum = 0;
    foreach (mb_str_split($normalized) as $char) {
      if (in_array($char, $this->vowels, true)) {
        $sum += $this->letterToNumber($char);
      }
    }

    if ($sum === 0) {
      return null;
    }

    return $this->reduceNumber($sum);
  }

  /**
   * Calculate Personality Number function
   *
   * @param string $fullName
   * @return integer|null
   */
  private function calculatePersonalityNumber(string $fullName): ?int
  {
    $normalized = $this->normalizeString($fullName);
    if ($normalized === '') {
      return null;
    }

    $sum = 0;
    foreach (mb_str_split($normalized) as $char) {
      if (! in_array($char, $this->vowels, true)) {
        $sum += $this->letterToNumber($char);
      }
    }

    if ($sum === 0) {
      return null;
    }

    return $this->reduceNumber($sum);
  }

  /**
   * Letter To Number function
   *
   * @param string $letter
   * @return integer
   */
  private function letterToNumber(string $letter): int
  {
    $letter = mb_strtoupper($letter, 'UTF-8');

    foreach ($this->letterMap as $number => $letters) {
      if (in_array($letter, $letters, true)) {
        return $number;
      }
    }

    return 0;
  }

  /**
   * Normalize String function
   *
   * @param string $value
   * @return string
   */
  private function normalizeString(string $value): string
  {
    $value = mb_strtoupper($value, 'UTF-8');
    // Rimuovi accenti di base (puoi raffinare con iconv)
    $value = strtr($value, [
      'À' => 'A',
      'Á' => 'A',
      'Â' => 'A',
      'Ã' => 'A',
      'Ä' => 'A',
      'Å' => 'A',
      'È' => 'E',
      'É' => 'E',
      'Ê' => 'E',
      'Ë' => 'E',
      'Ì' => 'I',
      'Í' => 'I',
      'Î' => 'I',
      'Ï' => 'I',
      'Ò' => 'O',
      'Ó' => 'O',
      'Ô' => 'O',
      'Õ' => 'O',
      'Ö' => 'O',
      'Ù' => 'U',
      'Ú' => 'U',
      'Û' => 'U',
      'Ü' => 'U',
      'Ç' => 'C',
    ]);
    // Tieni solo A-Z
    $value = preg_replace('/[^A-Z]/u', '', $value);

    return $value ?? '';
  }

  /**
   * Sum Digits function
   * Somma le cifre di un numero intero positivo.
   *
   * @param integer $number
   * @return integer
   */
  private function sumDigits(int $number): int
  {
    $number = abs($number);
    $sum = 0;

    foreach (str_split((string) $number) as $digit) {
      $sum += (int) $digit;
    }

    return $sum;
  }

  /**
   * Reduce Number function
   *
   * @param integer $number
   * @return integer
   */
  private function reduceNumber(int $number): int
  {
    $number = abs($number);
    // Numeri Maestri
    $masterNumbers = [11, 22, 33];

    while ($number > 9 && ! in_array($number, $masterNumbers, true)) {
      $number = $this->sumDigits($number);
    }

    return $number;
  }

  /**
   * Calculate Birth Day Number function
   *
   * @param string $birthDate
   * @return integer|null
   */
  private function calculateBirthDayNumber(string $birthDate): ?int
  {
    if (empty($birthDate)) {
      return null;
    }

    // birthDate in formato Y-m-d
    [$year, $month, $day] = explode('-', $birthDate);
    $dayInt = (int) $day;

    return $this->reduceNumber($dayInt);
  }

  /**
   * Calculate Maturity Number function
   *
   * @param integer|null $lifePath
   * @param integer|null $expression
   * @return integer|null
   */
  private function calculateMaturityNumber(?int $lifePath, ?int $expression): ?int
  {
    if ($lifePath === null || $expression === null) {
      return null;
    }

    $sum = $lifePath + $expression;

    return $this->reduceNumber($sum);
  }

  /**
   * Calculate Balance Number function
   *
   * @param string $firstName
   * @param string $lastName
   * @return integer|null
   */
  private function calculateBalanceNumber(string $firstName, string $lastName): ?int
  {
    $names = array_filter(explode(' ', trim($firstName . ' ' . $lastName)));

    if (empty($names)) {
      return null;
    }

    $sum = 0;

    foreach ($names as $name) {
      $normalized = $this->normalizeString($name);
      if ($normalized === '') {
        continue;
      }

      // prima lettera del nome
      $firstLetter = mb_substr($normalized, 0, 1, 'UTF-8');
      $sum += $this->letterToNumber($firstLetter);
    }

    if ($sum === 0) {
      return null;
    }

    return $this->reduceNumber($sum);
  }

  /**
   * Calculate Karmic Lessons function
   *
   * @param string $fullName
   * @return array
   */
  private function calculateKarmicLessons(string $fullName): array
  {
    $normalized = $this->normalizeString($fullName);
    if ($normalized === '') {
      return [];
    }

    $counts = array_fill(1, 9, 0);

    foreach (mb_str_split($normalized) as $char) {
      $number = $this->letterToNumber($char);
      if ($number >= 1 && $number <= 9) {
        $counts[$number]++;
      }
    }

    $lessons = [];

    foreach ($counts as $number => $count) {
      if ($count === 0) {
        $lessons[] = $number;
      }
    }

    return $lessons;
  }

  /**
   * Calculate Hidden Passion function
   *
   * @param string $fullName
   * @return array
   */
  private function calculateHiddenPassion(string $fullName): array
  {
    $normalized = $this->normalizeString($fullName);
    if ($normalized === '') {
      return [];
    }

    $counts = array_fill(1, 9, 0);

    foreach (mb_str_split($normalized) as $char) {
      $number = $this->letterToNumber($char);
      if ($number >= 1 && $number <= 9) {
        $counts[$number]++;
      }
    }

    $max = max($counts);
    if ($max <= 0) {
      return [];
    }

    $mostFrequent = [];

    foreach ($counts as $number => $count) {
      if ($count === $max) {
        $mostFrequent[] = $number;
      }
    }

    return $mostFrequent;
  }

  public function calculateWithMeanings(array $data, string $locale = 'it-IT'): array
  {
    // Calcolo numerico
    $numbers = $this->calculate($data);

    // Mappatura tra chiavi di calculate() e number_type del DB
    $typeMap = [
      'life_path'          => 'life_path',
      'expression_number'  => 'expression',
      'soul_urge_number'   => 'soul_urge',
      'personality_number' => 'personality',
      'birth_day_number'   => 'birth_day',
      'maturity_number'    => 'maturity',
      'balance_number'     => 'balance',
      'karmic_lessons'     => 'karmic_lesson',
      'hidden_passion'     => 'hidden_passion',
    ];

    $meanings = [];

    // Numeri singoli (non array)
    foreach (
      [
        'life_path',
        'expression_number',
        'soul_urge_number',
        'personality_number',
        'birth_day_number',
        'maturity_number',
        'balance_number',
      ] as $key
    ) {

      $value = $numbers[$key] ?? null;
      if ($value === null) {
        $meanings[$key] = null;
        continue;
      }

      $numberType = $typeMap[$key];

      $meaning = PythagoricMeaning::where('number_type', $numberType)
        ->where('number_value', $value)
        ->where('locale', $locale)
        ->first();

      $meanings[$key] = $meaning;
    }

    // Karmic Lessons (array di numeri, quindi array di significati)
    $karmicMeanings = [];
    if (!empty($numbers['karmic_lessons']) && is_array($numbers['karmic_lessons'])) {
      $karmicMeanings = PythagoricMeaning::where('number_type', $typeMap['karmic_lessons'])
        ->whereIn('number_value', $numbers['karmic_lessons'])
        ->where('locale', $locale)
        ->get()
        ->keyBy('number_value')
        ->toArray();
    }
    $meanings['karmic_lessons'] = $karmicMeanings;

    // Hidden Passion (array di numeri, quindi array di significati)
    $hiddenMeanings = [];
    if (!empty($numbers['hidden_passion']) && is_array($numbers['hidden_passion'])) {
      $hiddenMeanings = PythagoricMeaning::where('number_type', $typeMap['hidden_passion'])
        ->whereIn('number_value', $numbers['hidden_passion'])
        ->where('locale', $locale)
        ->get()
        ->keyBy('number_value')
        ->toArray();
    }
    $meanings['hidden_passion'] = $hiddenMeanings;

    return [
      // 'numbers'  => $numbers,
      'meanings' => $meanings,
    ];
  }
}
