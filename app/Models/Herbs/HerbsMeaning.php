<?php

namespace App\Models\Herbs;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'slug',
        'family',
        'genus',
        'species',
        'edible',
        'toxic',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'edible' => 'boolean',
            'toxic'  => 'boolean',

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Herbs Contents function
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function herbscontents(): HasMany
    {
        return $this->hasMany(HerbContent::class);
    }
}
