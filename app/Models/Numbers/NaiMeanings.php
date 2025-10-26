<?php

namespace App\Models\Numbers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NaiMeanings extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasUuids, SoftDeletes;
    /** @var int $incrementing */
    public $incrementing = false;
    /** @var string $keyType */
    protected $keyType = 'string';

    protected $table = 'nai_meanings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lang',
        'code',
        'title',
        'description',
        'meta',
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
