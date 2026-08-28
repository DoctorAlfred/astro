<?php

namespace App\Models\Astrology;

use App\Lib\TimeConstants;
use App\Lib\AstrologicConstants;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PlanetMeaning extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** @var int $incrementing */
    public $incrementing = false;
    /** @var string $keyType */
    protected $keyType = 'string';

    /** @var string $translation */

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     * w as working
     */
    protected $fillable = [
        'planet_id',
        'name',
        'symbol',
        'description',
        'characteristics',
        'keywords',
        'colors',
        'metals',
        'day',
        'rulership',
        'exaltation',
        'fall',
        'detriment',
        'positive_traits',
        'negative_traits',
        'gender',
        'average_speed',
        'orbital_period'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',

        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'name' => 'array',
            'description' => 'array',
            'characteristics' => 'array',
            'keywords' => 'array',
            'colors' => 'array',
            'metals' => 'array',
            'day' => 'array',
            'rulership' => 'array',
            'exaltation' => 'array',
            'fall' => 'array',
            'detriment' => 'array',
            'positive_traits' => 'array',
            'negative_traits' => 'array',

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Get Translated function
     *
     * @param string $field
     * @param string $locale
     * @return void
     */
    public function getTranslated($field, $locale = null)
    {
        $locale = $locale ?? $this->forcedLocale ?? app()->getLocale() ?? 'it';

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

        return $value[$locale] ?? $value['it'] ?? $value['en'] ?? null;
    }

    /**
     * Name function
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('name')
        );
    }

    /**
     * Description function
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('description')
        );
    }

    /**
     * Keywords function
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function keywords(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('keywords')
        );
    }

    /**
     * Positive Traits function (Tratti positivi)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function positiveTraits(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('positive_traits')
        );
    }

    /**
     * Negative Traits function (Tratti negativi)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function negativeTraits(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->getTranslated('negative_traits')
        );
    }

    /**
     * Day function (Giorno)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function day(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $locale = $this->forcedLocale ?? app()->getLocale() ?? 'it';

                if (is_string($value)) {
                    $value = json_decode($value, true);
                }

                if (is_array($value)) {
                    return $value[$locale] ?? $value['it'] ?? $value['en'] ?? null;
                }

                return $value;
            }
        );
    }

    /**
     * rulership function (Potere)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function rulership(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $locale = $this->forcedLocale ?? request()->get('lang', 'it');

                $signs = is_string($value) ? json_decode($value, true) : $value;

                if (!is_array($signs)) {
                    return $signs;
                }

                return collect($signs)->map(function ($sign) use ($locale) {
                    if (is_array($sign)) {
                        return $sign[$locale] ?? $sign['it'] ?? $sign['en'] ?? null;
                    }
                    return $sign;
                })->toArray();
            }
        );
    }

    /**
     * Exaltation function (Esaltazione)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function exaltation(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $locale = $this->forcedLocale ?? request()->get('lang', 'it');

                $signs = is_string($value) ? json_decode($value, true) : $value;

                if (!is_array($signs)) {
                    return $signs;
                }

                return collect($signs)->map(function ($sign) use ($locale) {
                    if (is_array($sign)) {
                        return $sign[$locale] ?? $sign['it'] ?? $sign['en'] ?? null;
                    }
                    return $sign;
                })->toArray();
            }
        );
    }

    /**
     * Fall function (Caduta o crollo, diminuzione)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function fall(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $locale = $this->forcedLocale ?? request()->get('lang', 'it');

                $signs = is_string($value) ? json_decode($value, true) : $value;

                if (!is_array($signs)) {
                    return $signs;
                }

                return collect($signs)->map(function ($sign) use ($locale) {
                    if (is_array($sign)) {
                        return $sign[$locale] ?? $sign['it'] ?? $sign['en'] ?? null;
                    }
                    return $sign;
                })->toArray();
            }
        );
    }

    /**
     * Detriment function (Danno che potrebbe portare)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function detriment(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $locale = $this->forcedLocale ?? request()->get('lang', 'it');

                $signs = is_string($value) ? json_decode($value, true) : $value;

                if (!is_array($signs)) {
                    return $signs;
                }

                return collect($signs)->map(function ($sign) use ($locale) {
                    if (is_array($sign)) {
                        return $sign[$locale] ?? $sign['it'] ?? $sign['en'] ?? null;
                    }
                    return $sign;
                })->toArray();
            }
        );
    }
}
