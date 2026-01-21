<?php

namespace App\Models\Angels;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
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

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     * w as working
     */
    protected $fillable = [
        'number',
        'name',
        'hebrew_letters',
        'hebrew_name',
        'letter_details',

        'choir',
        'archangel',
        'element',
        'zodiac_sign',
        'planet',

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
        'keywords',
        'energy',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'created_at',
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
            'letter_details' => 'array',

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

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }
}
