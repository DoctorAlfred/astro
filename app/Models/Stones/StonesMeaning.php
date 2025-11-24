<?php

namespace App\Models\Stones;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StonesMeaning extends Model
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
        'number',
        'hardness',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(StonesTranslation::class, 'stones_meaning_id');
    }

    /**
     * Translation function
     *
     * @param string $language
     * @return array
     */
    public function translation(string $language = 'it'): array
    {
        return $this->translations()->where('language', $language)->first();
    }
}
