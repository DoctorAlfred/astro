<?php

namespace App\Models\Angels;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AngelsMeaning extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** @var int $incrementing */
    public $incrementing = false;
    /** @var string $keyType */
    protected $keyType = 'string';
    /** @var string $translation */
    protected $appends = [
        'degree_start',
        'degree_end',
        'trigram_sum',
        'trigram_reduction',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     * w as working
     */
    protected $fillable = [
        'number',
        'name',
        'kabal_name',
        'trigram',
        'trigram_significate',
        'definition',
        'new_definition',
        'hebrew_letters',
        'hebrew_name',
        'letter_details',

        'choir',
        'archangel',
        'element',
        'zodiac_days',

        'regency_start_day',
        'regency_start_month',
        'regency_end_day',
        'regency_end_month',

        'degree_start',
        'degree_end',
        'orientation',

        'psalm',
        'psalm_verse',
        'vulgata',
        'vulgata_verse',
        'psalm_link',

        'trigram_sum',
        'trigram_reduction',

        'quality',
        'help',
        'prevent',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',
        'trigram',
        'trigram_significate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected ?string $forcedLocale = null;

    public function setLocale(string $locale): self
    {
        $this->forcedLocale = $locale;
        return $this;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'definition' => 'array',
            'new_definition' => 'array',
            'letter_details' => 'array',

            'zodiac_days' => 'array',

            'regency_start_day'   => 'integer',
            'regency_start_month' => 'integer',
            'regency_end_day'     => 'integer',
            'regency_end_month'   => 'integer',

            'degree_start' => 'integer',
            'degree_end'   => 'integer',

            'psalm'          => 'integer',
            'psalm_verse'    => 'integer',
            'vulgata'        => 'integer',
            'vulgata_verse'  => 'integer',

            'trigram_sum'       => 'integer',
            'trigram_reduction' => 'integer',

            'quality' => 'array',
            'help' => 'array',
            'prevent' => 'array',

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * TRANSLATION method ==============================
     */
    protected const ZODIAC_TRANSLATIONS = [
        'aries' => [
            'it' => 'Ariete',
            'en' => 'Aries',
            'la' => 'Aries',
            'he' => 'טלה',
        ],
        'taurus' => [
            'it' => 'Toro',
            'en' => 'Taurus',
            'la' => 'Taurus',
            'he' => 'שור',
        ],
        'gemini' => [
            'it' => 'Gemelli',
            'en' => 'Gemini',
            'la' => 'Gemini',
            'he' => 'תאומים',
        ],
        'cancer' => [
            'it' => 'Cancro',
            'en' => 'Cancer',
            'la' => 'Cancer',
            'he' => 'סרטן',
        ],
        'leo' => [
            'it' => 'Leone',
            'en' => 'Leo',
            'la' => 'Leo',
            'he' => 'אריה',
        ],
        'virgo' => [
            'it' => 'Vergine',
            'en' => 'Virgo',
            'la' => 'Virgo',
            'he' => 'בתולה',
        ],
        'libra' => [
            'it' => 'Bilancia',
            'en' => 'Libra',
            'la' => 'Libra',
            'he' => 'מאזניים',
        ],
        'scorpio' => [
            'it' => 'Scorpione',
            'en' => 'Scorpio',
            'la' => 'Scorpius',
            'he' => 'עקרב',
        ],
        'sagittarius' => [
            'it' => 'Sagittario',
            'en' => 'Sagittarius',
            'la' => 'Sagittarius',
            'he' => 'קשת',
        ],
        'capricorn' => [
            'it' => 'Capricorno',
            'en' => 'Capricorn',
            'la' => 'Capricornus',
            'he' => 'גדי',
        ],
        'aquarius' => [
            'it' => 'Acquario',
            'en' => 'Aquarius',
            'la' => 'Aquarius',
            'he' => 'דלי',
        ],
        'pisces' => [
            'it' => 'Pesci',
            'en' => 'Pisces',
            'la' => 'Pisces',
            'he' => 'דגים',
        ],
    ];

    protected const ELEMENT_TRANSLATIONS = [
        'fire' => [
            'it' => 'Fuoco',
            'en' => 'Fire',
            'la' => 'Ignis',
            'he' => 'אש',
        ],
        'water' => [
            'it' => 'Acqua',
            'en' => 'Water',
            'la' => 'Aqua',
            'he' => 'מים',
        ],
        'air' => [
            'it' => 'Aria',
            'en' => 'Air',
            'la' => 'Aer',
            'he' => 'אוויר',
        ],
        'earth' => [
            'it' => 'Terra',
            'en' => 'Earth',
            'la' => 'Terra',
            'he' => 'אדמה',
        ],
    ];

    protected const CHOIR_TRANSLATIONS = [
        'seraphim' => [
            'it' => 'Serafini',
            'en' => 'Seraphim',
            'la' => 'Seraphim',
            'he' => 'שרפים',
        ],
        'cherubim' => [
            'it' => 'Cherubini',
            'en' => 'Cherubim',
            'la' => 'Cherubim',
            'he' => 'כרובים',
        ],
        'thrones' => [
            'it' => 'Troni',
            'en' => 'Thrones',
            'la' => 'Throni',
            'he' => 'אופנים',
        ],
    ];

    protected const ARCHANGEL_TRANSLATIONS = [

        'metatron' => [
            'it' => 'Enoch/Metatron',
            'en' => 'Enoch/Metatron',
            'la' => 'Enoch/Metatron',
            'he' => 'חנוך/מטטרון',
        ],

        'raziel' => [
            'it' => 'Raziel',
            'en' => 'Raziel',
            'la' => 'Raziel',
            'he' => 'רזיאל',
        ],

        'tzaphkiel' => [
            'it' => 'Zafkiel', // "Conoscenza di Dio" o "Contemplazione di Dio"
            'en' => 'Tzaphkiel',
            'la' => 'Tzaphkiel',
            'he' => 'צפקיאל',
        ],

        'zadkiel' => [
            'it' => 'Zadkiel',
            'en' => 'Zadkiel',
            'la' => 'Zadkiel',
            'he' => 'צדקיאל',
        ],

        'camael' => [
            'it' => 'Camael',
            'en' => 'Camael',
            'la' => 'Camael',
            'he' => 'כמאל',
        ],

        'raphael' => [
            'it' => 'Raphael',
            'en' => 'Raphael',
            'la' => 'Raphael',
            'he' => 'רפאל',
        ],

        'haniel' => [
            'it' => 'Haniel',
            'en' => 'Haniel',
            'la' => 'Haniel',
            'he' => 'חניאל',
        ],

        'michael' => [
            'it' => 'Michael',
            'en' => 'Michael',
            'la' => 'Michael',
            'he' => 'מיכאל',
        ],

        'gabriel' => [
            'it' => 'Gabriel',
            'en' => 'Gabriel',
            'la' => 'Gabriel',
            'he' => 'גבריאל',
        ],

    ];

    /** ================================================== */

    /**
     * Get Translation function
     *
     * @return void
     */
    public function getTranslated($field, $locale = null)
    {
        $locale = $locale ?? request()->get('language', 'it');

        $value = $this->attributes[$field] ?? null;

        if (is_null($value)) {
            return null;
        }

        if (is_string($value)) {
            $value = json_decode($value, true);
        }

        if (!is_array($value)) {
            return null;
        }

        return $value[$locale] ?? $value['it'] ?? null;
    }

    /**
     * Choir translate and filter function
     *
     * @return Attribute
     */
    protected function choir(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                $locale = $this->forcedLocale ?? 'it';
    
                return self::CHOIR_TRANSLATIONS[$value][$locale]
                    ?? self::CHOIR_TRANSLATIONS[$value]['it']
                    ?? null;
            }
        );
    }

    /**
     * Archangel translate and filter function
     *
     * @return Attribute
     */
    protected function archangel(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $locale = $this->forcedLocale ?? 'it';

                return self::ARCHANGEL_TRANSLATIONS[$value][$locale]
                    ?? self::ARCHANGEL_TRANSLATIONS[$value]['it']
                    ?? null;
            }
        );
    }

    /**
     * Element translate and filter function
     *
     * @return Attribute
     */
    protected function element(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                $locale = $this->forcedLocale ?? 'it';
    
                return self::ELEMENT_TRANSLATIONS[$value][$locale]
                    ?? self::ELEMENT_TRANSLATIONS[$value]['it']
                    ?? null;
            }
        );
    }

    /**
     * Definition translate and filter function
     *
     * @return Attribute
     */
    protected function definition(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('definition')
        );
    }

    /**
     * New Definition translate and filter function
     *
     * @return Attribute
     */
    protected function newDefinition(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('new_definition')
        );
    }

    /**
     * Quality translate and filter function
     *
     * @return Attribute
     */
    protected function quality(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('quality')
        );
    }

    /**
     * Help translate and filter function
     *
     * @return Attribute
     */
    protected function help(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('help')
        );
    }

    /**
     * Prevent translate and filter function
     *
     * @return Attribute
     */
    protected function prevent(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('prevent')
        );
    }

    /**
     * Get Zodiac Sign function
     *
     * @param integer $day
     * @param integer $month
     * @return string
     */
    private function getZodiacSign(int $day, int $month): string
    {
        $date = sprintf('%02d-%02d', $month, $day);

        return match (true) {
            $date >= '03-21' && $date <= '04-19' => 'aries',
            $date >= '04-20' && $date <= '05-20' => 'taurus',
            $date >= '05-21' && $date <= '06-20' => 'gemini',
            $date >= '06-21' && $date <= '07-22' => 'cancer',
            $date >= '07-23' && $date <= '08-22' => 'leo',
            $date >= '08-23' && $date <= '09-22' => 'virgo',
            $date >= '09-23' && $date <= '10-22' => 'libra',
            $date >= '10-23' && $date <= '11-21' => 'scorpio',
            $date >= '11-22' && $date <= '12-21' => 'sagittarius',
            $date >= '12-22' || $date <= '01-19' => 'capricorn',
            $date >= '01-20' && $date <= '02-18' => 'aquarius',
            default => 'pisces',
        };
    }

    /**
     * Zodiac Days translate function
     *
     * @return Attribute
     */
    protected function zodiacDays(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                $locale = $this->forcedLocale ?? 'it';

                $days = is_string($value)
                    ? json_decode($value, true)
                    : $value;

                return collect($days)->map(function ($day) use ($locale) {

                    $signKey = $day['sign'];

                    return [
                        'day' => $day['day'],
                        'month' => $day['month'],
                        'sign' => self::ZODIAC_TRANSLATIONS[$signKey][$locale]
                            ?? self::ZODIAC_TRANSLATIONS[$signKey]['it'],
                    ];
                })->toArray();
            }
        );
    }

    /**
     * Get Zodiac Days Translated Attribute function
     *
     * @return array
     */
    public function getZodiacDaysTranslatedAttribute(): array
    {
        $locale = app()->getLocale();

        return collect($this->zodiac_days)->map(function ($day) use ($locale) {
            return [
                'day' => $day['day'],
                'month' => $day['month'],
                'sign_key' => $day['sign'],
                'sign_label' => self::ZODIAC_TRANSLATIONS[$day['sign']][$locale]
                    ?? self::ZODIAC_TRANSLATIONS[$day['sign']]['en'],
            ];
        })->toArray();
    }

    /**
     * Letter Details function
     *
     * @return Attribute
     */
    protected function letterDetails(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                $locale = $this->forcedLocale ?? 'it';

                $letters = is_string($value)
                    ? json_decode($value, true)
                    : $value;

                return collect($letters)->map(function ($letter) use ($locale) {

                    if (isset($letter['meaning']) && is_array($letter['meaning'])) {
                        $letter['meaning'] =
                            $letter['meaning'][$locale]
                            ?? $letter['meaning']['it']
                            ?? null;
                    }

                    return $letter;
                })->toArray();
            }
        );
    }

    /**
     * Degree Start function
     *
     * @return Attribute
     */
    protected function degreeStart(): Attribute
    {
        return Attribute::make(
            get: fn() => ($this->number - 1) * 5
            // get: fn() => (($this->number - 1) % 6) * 5
        );
    }

    /**
     * Degree End function
     *
     * @return Attribute
     */
    protected function degreeEnd(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->number * 5
            // get: fn() => ((($this->number - 1) % 6) * 5) + 5
        );
    }

    /**
     * Trigram Sum function
     *
     * @return Attribute
     */
    protected function trigramSum(): Attribute
    {
        return Attribute::make(
            get: fn() => collect($this->letter_details)->sum('value')
        );
    }

    /**
     * Trigram Reduction function
     *
     * @return Attribute
     */
    protected function trigramReduction(): Attribute
    {
        return Attribute::make(
            get: fn() => array_sum(str_split(
                collect($this->letter_details)->sum('value')
            ))
        );
    }
}
