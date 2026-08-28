<?php

namespace App\Services\Planets;

use App\Models\Astrology\PlanetMeaning;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class PlanetsServices
{
  /**
   * Get Planets function
   *
   * @return array
   */
  public function getPlanets(): array
  {
    return Cache::remember('planets_list_cached', 86400, function () {
      return PlanetMeaning::orderBy('planet_id')->get()->toArray();
    });
  }

  /**
   * Get Planet By Id function
   *
   * @param integer $planetId
   * @return array|null
   */
  public function getPlanetById(int $planetId): ?array
  {
    $planets = $this->getPlanets();
    foreach ($planets as $planet) {
      if ($planet['planet_id'] == $planetId) {
        return $planet;
      }
    }
    return null;
  }

  /**
   * Get Planet Map function
   *
   * @param string $locale
   * @return array
   */
  public function getPlanetMap(string $locale = 'it'): array
  {
    $planets = $this->getPlanets();
    $map = [];

    foreach ($planets as $planet) {
      $name = json_decode($planet['name'], true);
      $map[$planet['planet_id']] = $name[$locale] ?? $name['en'] ?? $name['it'] ?? "Planet_{$planet['planet_id']}";
    }

    return $map;
  }

  /**
   * Get Planets With Data function
   *
   * @param string $locale
   * @return array
   */
  public function getPlanetsWithData(string $locale = 'it'): array
  {
    $planets = $this->getPlanets();
    $data = [];

    foreach ($planets as $planet) {
      $data[$planet['planet_id']] = $this->formatPlanetData($planet, $locale);
    }

    return $data;
  }

  /**
   * Format Planet Data function
   *
   * @param array $planet
   * @param string $locale
   * @return array
   */
  public function formatPlanetData(array $planet, string $locale = 'it'): array
  {
    $name = json_decode($planet['name'] ?? '{}', true);
    $description = json_decode($planet['description'] ?? '{}', true);
    $keywords = json_decode($planet['keywords'] ?? '{}', true);
    $positiveTraits = json_decode($planet['positive_traits'] ?? '{}', true);
    $negativeTraits = json_decode($planet['negative_traits'] ?? '{}', true);
    $day = json_decode($planet['day'] ?? '{}', true);
    $rulership = json_decode($planet['rulership'] ?? '[]', true);
    $exaltation = json_decode($planet['exaltation'] ?? '[]', true);
    $fall = json_decode($planet['fall'] ?? '[]', true);
    $detriment = json_decode($planet['detriment'] ?? '[]', true);

    return [
      'id' => $planet['planet_id'],
      'name' => $name[$locale] ?? $name['en'] ?? $name['it'] ?? 'Unknown',
      'symbol' => $planet['symbol'] ?? null,
      'description' => $description[$locale] ?? $description['en'] ?? $description['it'] ?? '',
      'keywords' => $keywords[$locale] ?? $keywords['en'] ?? [],
      'colors' => $planet['colors'] ?? [],
      'metals' => $planet['metals'] ?? [],
      'day' => $day[$locale] ?? $day['en'] ?? null,
      'gender' => $planet['gender'] ?? null,
      'positive_traits' => $positiveTraits[$locale] ?? $positiveTraits['en'] ?? [],
      'negative_traits' => $negativeTraits[$locale] ?? $negativeTraits['en'] ?? [],
      'rulership' => $this->extractTranslatedSigns($rulership, $locale),
      'exaltation' => $this->extractTranslatedSigns($exaltation, $locale),
      'fall' => $this->extractTranslatedSigns($fall, $locale),
      'detriment' => $this->extractTranslatedSigns($detriment, $locale),
      'characteristics' => $planet['characteristics'] ?? [],
      'average_speed' => $planet['average_speed'] ?? null,
      'orbital_period' => $planet['orbital_period'] ?? null,
    ];
  }

  /**
   * Extract Translated Signs function
   *
   * @param array $signs
   * @param string $locale
   * @return array
   */
  private function extractTranslatedSigns(array $signs, string $locale): array
  {
    if (empty($signs)) {
      return [];
    }

    return array_map(function ($sign) use ($locale) {
      if (is_array($sign)) {
        return $sign[$locale] ?? $sign['en'] ?? $sign['it'] ?? 'Unknown';
      }
      return $sign;
    }, $signs);
  }

  /**
   * Get Planets For Calculation function
   *
   * @param string $locale
   * @return array
   */
  public function getPlanetsForCalculation(string $locale = 'it'): array
  {
    return $this->getPlanetMap($locale);
  }

  /**
   * Clear Cache function
   *
   * @return void
   */
  public function clearCache(): void
  {
    Cache::forget('planets_list_cached');
    Log::info('Cache dei pianeti svuotata');
  }

  /**
   * Refresh Cache function
   *
   * @return void
   */
  public function refreshCache(): void
  {
    $this->clearCache();
    $this->getPlanets();
    Log::info('Cache dei pianeti ricaricata');
  }
}
