<?php

namespace App\Lib;

class AstrologicConstants
{
  /**
   * Segni zodiacali
   * 
   * @var array ZODIAC_SIGNS
   */
  public const ZODIAC_SIGNS = [
    'aries' => [
      'en' => 'Aries',
      'it' => 'Ariete',
      'es' => 'Aries',
      'fr' => 'Bélier',
      'de' => 'Widder',
      'la' => 'Aries',
      'he' => 'טלה',
      'arc' => 'ܐܡܪܐ', // Aramaico: Amra (agnello)
      'ru' => 'Овен',
      'ja' => '牡羊座',
      'zh' => '白羊座'
    ],
    'taurus' => [
      'en' => 'Taurus',
      'it' => 'Toro',
      'es' => 'Tauro',
      'fr' => 'Taureau',
      'de' => 'Stier',
      'la' => 'Taurus',
      'he' => 'שור',
      'arc' => 'ܬܘܪܐ', // Aramaico: Tora (toro)
      'ru' => 'Телец',
      'ja' => '牡牛座',
      'zh' => '金牛座'
    ],
    'gemini' => [
      'en' => 'Gemini',
      'it' => 'Gemelli',
      'es' => 'Géminis',
      'fr' => 'Gémeaux',
      'de' => 'Zwillinge',
      'la' => 'Gemini',
      'he' => 'תאומים',
      'arc' => 'ܬܐܘܡܐ', // Aramaico: Te'oma (gemelli)
      'ru' => 'Близнецы',
      'ja' => '双子座',
      'zh' => '双子座'
    ],
    'cancer' => [
      'en' => 'Cancer',
      'it' => 'Cancro',
      'es' => 'Cáncer',
      'fr' => 'Cancer',
      'de' => 'Krebs',
      'la' => 'Cancer',
      'he' => 'סרטן',
      'arc' => 'ܣܪܛܢܐ', // Aramaico: Sartana (granchio)
      'ru' => 'Рак',
      'ja' => '蟹座',
      'zh' => '巨蟹座'
    ],
    'leo' => [
      'en' => 'Leo',
      'it' => 'Leone',
      'es' => 'Leo',
      'fr' => 'Lion',
      'de' => 'Löwe',
      'la' => 'Leo',
      'he' => 'אריה',
      'arc' => 'ܐܪܝܐ', // Aramaico: Arya (leone)
      'ru' => 'Лев',
      'ja' => '獅子座',
      'zh' => '狮子座'
    ],
    'virgo' => [
      'en' => 'Virgo',
      'it' => 'Vergine',
      'es' => 'Virgo',
      'fr' => 'Vierge',
      'de' => 'Jungfrau',
      'la' => 'Virgo',
      'he' => 'בתולה',
      'arc' => 'ܒܬܘܠܬܐ', // Aramaico: Btulta (vergine)
      'ru' => 'Дева',
      'ja' => '乙女座',
      'zh' => '处女座'
    ],
    'libra' => [
      'en' => 'Libra',
      'it' => 'Bilancia',
      'es' => 'Libra',
      'fr' => 'Balance',
      'de' => 'Waage',
      'la' => 'Libra',
      'he' => 'מאזניים',
      'arc' => 'ܡܘܙܢܐ', // Aramaico: Mozna (bilancia)
      'ru' => 'Весы',
      'ja' => '天秤座',
      'zh' => '天秤座'
    ],
    'scorpio' => [
      'en' => 'Scorpio',
      'it' => 'Scorpione',
      'es' => 'Escorpio',
      'fr' => 'Scorpion',
      'de' => 'Skorpion',
      'la' => 'Scorpio',
      'he' => 'עקרב',
      'arc' => 'ܥܩܪܒܐ', // Aramaico: 'Aqraba (scorpione)
      'ru' => 'Скорпион',
      'ja' => '蠍座',
      'zh' => '天蝎座'
    ],
    'sagittarius' => [
      'en' => 'Sagittarius',
      'it' => 'Sagittario',
      'es' => 'Sagitario',
      'fr' => 'Sagittaire',
      'de' => 'Schütze',
      'la' => 'Sagittarius',
      'he' => 'קשת',
      'arc' => 'ܩܫܬܐ', // Aramaico: Qashta (arco)
      'ru' => 'Стрелец',
      'ja' => '射手座',
      'zh' => '射手座'
    ],
    'capricorn' => [
      'en' => 'Capricorn',
      'it' => 'Capricorno',
      'es' => 'Capricornio',
      'fr' => 'Capricorne',
      'de' => 'Steinbock',
      'la' => 'Capricornus',
      'he' => 'גדי',
      'arc' => 'ܓܕܝܐ', // Aramaico: Gadia (capricorno)
      'ru' => 'Козерог',
      'ja' => '山羊座',
      'zh' => '摩羯座'
    ],
    'aquarius' => [
      'en' => 'Aquarius',
      'it' => 'Acquario',
      'es' => 'Acuario',
      'fr' => 'Verseau',
      'de' => 'Wassermann',
      'la' => 'Aquarius',
      'he' => 'דלי',
      'arc' => 'ܕܠܘܬܐ', // Aramaico: Daluta (portatore d'acqua)
      'ru' => 'Водолей',
      'ja' => '水瓶座',
      'zh' => '水瓶座'
    ],
    'pisces' => [
      'en' => 'Pisces',
      'it' => 'Pesci',
      'es' => 'Piscis',
      'fr' => 'Poissons',
      'de' => 'Fische',
      'la' => 'Pisces',
      'he' => 'דגים',
      'arc' => 'ܢܘܢܐ', // Aramaico: Nuna (pesce)
      'ru' => 'Рыбы',
      'ja' => '魚座',
      'zh' => '双鱼座'
    ]
  ];

  /**
   * Costanti astronomiche
   * 
   * @var array ASTRONOMICAL
   */
  public const ASTRONOMICAL = [
    'sidereal_day' => [
      'en' => 'Sidereal Day',
      'it' => 'Giorno Sidereo',
      'es' => 'Día Sideral',
      'fr' => 'Jour Sidéral',
      'de' => 'Siderischer Tag',
      'la' => 'Dies Sidereus',
      'he' => 'יום כוכבי',
      'arc' => 'ܝܘܡܐ ܣܝܕܪܝܐ', // Aramaico: Yoma Sidraya
      'ru' => 'Звёздные сутки',
      'ja' => '恒星日',
      'zh' => '恒星日'
    ],
    'tropical_year' => [
      'en' => 'Tropical Year',
      'it' => 'Anno Tropico',
      'es' => 'Año Trópico',
      'fr' => 'Année Tropique',
      'de' => 'Tropisches Jahr',
      'la' => 'Annus Tropicalis',
      'he' => 'שנה טרופית',
      'arc' => 'ܫܢܬܐ ܛܪܘܦܝܬܐ', // Aramaico: Shanta Tropita
      'ru' => 'Тропический год',
      'ja' => '回帰年',
      'zh' => '回归年'
    ],
    'sidereal_year' => [
      'en' => 'Sidereal Year',
      'it' => 'Anno Sidereo',
      'es' => 'Año Sideral',
      'fr' => 'Année Sidérale',
      'de' => 'Siderisches Jahr',
      'la' => 'Annus Sidereus',
      'he' => 'שנה כוכבית',
      'arc' => 'ܫܢܬܐ ܣܝܕܪܝܬܐ', // Aramaico: Shanta Sidrayta
      'ru' => 'Звёздный год',
      'ja' => '恒星年',
      'zh' => '恒星年'
    ],
    'equinox' => [
      'en' => 'Equinox',
      'it' => 'Equinozio',
      'es' => 'Equinoccio',
      'fr' => 'Équinoxe',
      'de' => 'Tagundnachtgleiche',
      'la' => 'Aequinoctium',
      'he' => 'שוויון',
      'arc' => 'ܡܬܟܐ ܕܝܘܡܐ ܘܠܠܝܐ', // Aramaico: Matka d'yoma w-layla
      'ru' => 'Равноденствие',
      'ja' => '春分/秋分',
      'zh' => '春分/秋分'
    ],
    'solstice' => [
      'en' => 'Solstice',
      'it' => 'Solstizio',
      'es' => 'Solsticio',
      'fr' => 'Solstice',
      'de' => 'Sonnenwende',
      'la' => 'Solstitium',
      'he' => 'היפוך',
      'arc' => 'ܡܬܟܐ ܕܫܡܫܐ', // Aramaico: Matka d'shamsha
      'ru' => 'Солнцестояние',
      'ja' => '夏至/冬至',
      'zh' => '夏至/冬至'
    ]
  ];

  /**
   * Pianeti e loro giorni associati
   * 
   * @var array PLANET_DAYS
   */
  public const PLANET_DAYS = [
    0 => 'sunday',    // Sole
    1 => 'monday',    // Luna
    2 => 'wednesday', // Mercurio
    3 => 'friday',    // Venere
    4 => 'tuesday',   // Marte
    5 => 'thursday',  // Giove
    6 => 'saturday',  // Saturno
    7 => 'saturday',  // Urano
    8 => 'friday',    // Nettuno
    9 => 'tuesday',   // Plutone
  ];
}
