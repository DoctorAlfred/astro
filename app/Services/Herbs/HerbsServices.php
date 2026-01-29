<?php

namespace App\Services\Herbs;

use App\Models\Herbs\HerbsMeaning;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HerbsServices
{
  /**
   * Restituisce la scheda completa di una pianta
   *
   * @param string $name
   * @param string $language it|en
   * @return array
   *
   * @throws ModelNotFoundException
   */
  public function getHerb(string $name, string $language = 'it'): array
  {
    $normalized = trim(mb_strtolower($name));

    $herb = HerbsMeaning::query()
      ->whereRaw('LOWER(name) = ?', [$normalized])
      ->orWhereRaw('LOWER(latin_name) = ?', [$normalized])
      ->first();

    if (!$herb) {
      throw new ModelNotFoundException("Herb not found: {$name}");
    }

    return $this->formatResponse($herb, $language);
  }

  /**
   * Format risposta API
   */
  protected function formatResponse(HerbsMeaning $herb, string $language): array
  {
    return [
      'name'      => $herb->name,
      'latinName' => $herb->latin_name,
      'family'    => $herb->family,

      'usedParts' => $herb->used_parts,

      'nutritionalValues' => $herb->nutritional_values,

      'scientificProperties' => $this->translateBlock(
        $herb->scientific_properties,
        $language
      ),

      'curativeUses' => $this->translateBlock(
        $herb->curative_uses,
        $language
      ),

      'esotericProperties' => $this->translateBlock(
        $herb->esoteric_properties,
        $language
      ),

      'occultCorrespondences' => $herb->occult_correspondences,

      'warnings' => $this->translateText(
        $herb->warnings,
        $language
      ),
    ];
  }

  /**
   * Gestione lingua per blocchi complessi
   * Se la lingua è EN ma i contenuti sono solo IT,
   * lo dichiara esplicitamente (nessuna invenzione).
   */
  protected function translateBlock(?array $block, string $language): ?array
  {
    if ($block === null) {
      return null;
    }

    if ($language === 'en') {
      return [
        'note' => 'Content available only in Italian.',
        'content' => $block,
      ];
    }

    return $block;
  }

  /**
   * Gestione lingua per testi semplici
   */
  protected function translateText(?string $text, string $language): ?string
  {
    if ($text === null) {
      return null;
    }

    if ($language === 'en') {
      return 'Content available only in Italian.';
    }

    return $text;
  }
}
