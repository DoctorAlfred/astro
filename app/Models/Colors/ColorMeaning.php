<?php

namespace App\Models\Colors;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ColorMeaning extends Model
{
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** Disabilita incremento automatico */
    public $incrementing = false;
    /** Chiave primaria sarà stringa (UUID) */
    protected $keyType = 'string';

    protected $table = 'color_meanings';

    /** Fillable **/
    protected $fillable = [
        'name',
        'hex',
        'psicologia',
        'ombra',
        'spirituale',
        'chakra',
        'numerologia',
        'organi',
        'licnomanzia',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string, bool, datetime>
     */
    protected function casts(): array
    {
        return [
            'name'        => 'array',
            'psychology'  => 'array',
            'shadow'      => 'array',
            'spiritual'   => 'array',
            'chakra'      => 'array',
            'organs'      => 'array',
            'licnomancy'  => 'array',

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Scope By Numerology function
     *
     * @param mixed $query
     * @param integer $numero
     * @return void
     */
    public function scopeByNumerology($query, int $numero)
    {
        return $query->where('numerology', $numero);
    }

    /**
     * Scope By Chakra function
     *
     * @param mixed $query
     * @param string $chakra
     * @return void
     */
    public function scopeByChakra($query, string $chakra, string $locale = 'it')
    {
        return $query->where("chakra->{$locale}", 'LIKE', "%{$chakra}%");
    }
}
