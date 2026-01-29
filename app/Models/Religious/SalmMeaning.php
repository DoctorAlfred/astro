<?php

namespace App\Models\Religious;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalmMeaning extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** @var int $incrementing */
    public $incrementing = false;
    /** @var string $keyType */
    protected $keyType = 'string';

    protected $table = 'salm_meanings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'salm_name',
        'salm_period',
        'salm_number',
        'salm_orig',
        'lang',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string> The Eloquent casts applied to attributes
     */
    protected $casts = [
        'salm_orig' => 'array',
        'lang'      => 'array',
        
        'created_at' => "datetime:d-m-Y H:i",
        'updated_at' => "datetime:d-m-Y H:i",
        'deleted_at' => "datetime:d-m-Y H:i",
    ];
}
