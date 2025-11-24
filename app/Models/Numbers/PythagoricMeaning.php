<?php

namespace App\Models\Numbers;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PythagoricMeaning extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** @var int $incrementing */
    public $incrementing = false;
    /** @var string $keyType */
    protected $keyType = 'string';

    protected $table = 'pythagoric_meanings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'number_type',
        'number_value',
        'locale',
        'title',
        'short_description',
        'long_description',
        'metadata',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string> The Eloquent casts applied to attributes
     */
    protected $casts = [
        'meta' => 'array',
        'created_at' => "datetime:d-m-Y H:i",
        'updated_at' => "datetime:d-m-Y H:i",
        'deleted_at' => "datetime:d-m-Y H:i",
    ];
}
