<?php

namespace App\Services\Astro;


/**
 * Servizio per il calcolo di dati astrologici di base
 * 
 * Fornisce funzioni per calcolare posizioni di Sole, Luna, ascendente
 * e segni zodiacali con supporto multilingua.
 * 
 * NOTA: I calcoli sono approssimativi e utilizzano algoritmi semplificati.
 * Per uso professionale/medico si consigliano librerie specializzate.
 */
class SignServices
{
  private array $signs = [
    'it' => ['Ariete', 'Toro', 'Gemelli', 'Cancro', 'Leone', 'Vergine', 'Bilancia', 'Scorpione', 'Sagittario', 'Capricorno', 'Acquario', 'Pesci'],
    'en' => ['Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn', 'Aquarius', 'Pisces'],
    'es' => ['Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario', 'Capricornio', 'Acuario', 'Piscis'],
    'fr' => ['Bélier', 'Taureau', 'Gémeaux', 'Cancer', 'Lion', 'Vierge', 'Balance', 'Scorpion', 'Sagittaire', 'Capricorne', 'Verseau', 'Poissons'],
    'de' => ['Widder', 'Stier', 'Zwillinge', 'Krebs', 'Löwe', 'Jungfrau', 'Waage', 'Skorpion', 'Schütze', 'Steinbock', 'Wassermann', 'Fische'],
    'la' => ['Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricornus', 'Aquarius', 'Pisces'],
    'he' => ['טלה', 'שור', 'תאומים', 'סרטן', 'אריה', 'בתולה', 'מאזניים', 'עקרב', 'קשת', 'גדי', 'דלי', 'דגים']
  ];

  public function getSign(float $longitude, string $locale = 'it'): array
  {
    $index = floor($longitude / 30);
    $signName = $this->signs[$locale][$index] ?? $this->signs['it'][$index];

    return [
      'name' => $signName,
      'index' => $index,
      'longitude' => round($longitude, 4),
      'degrees_in_sign' => round(fmod($longitude, 30), 4),
    ];
  }
}
