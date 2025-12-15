<?php

namespace App\Models\Herbs;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HerbsMeaning extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** Disabilita incremento automatico */
    public $incrementing = false;
    /** Chiave primaria sarà stringa (UUID) */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'latin_name',
        'family',
        'used_parts',
        'nutritional_values',
        'scientific_properties',
        'curative_uses',
        'esoteric_properties',
        'occult_correspondences',
        'warnings',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'used_parts'              => 'array',
            'nutritional_values'      => 'array',
            'scientific_properties'   => 'array',
            'curative_uses'           => 'array',
            'esoteric_properties'     => 'array',
            'occult_correspondences'  => 'array',

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Get Full Name Attribute function
     * - Nome completo (volgare + latino)
     *
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        if ($this->latin_name) {
            return "{$this->name} ({$this->latin_name})";
        }

        return $this->name;
    }
}
