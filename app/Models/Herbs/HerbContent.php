<?php

namespace App\Models\Herbs;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\Herbs\HerbContentType;
use App\Enums\Herbs\HerbSourceType;
use App\Enums\Herbs\HerbEvidenceLevel;

class HerbContent extends Model
{
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** Fillable **/
    protected $fillable = [
        'herb_id',
        'type',
        'language',
        'title',
        'content',
        'source_type',
        'evidence_level',
        'source_reference',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string, bool, datetime>
     */
    protected function casts(): array
    {
        return [
            'type'           => HerbContentType::class,
            'source_type'    => HerbSourceType::class,
            'evidence_level' => HerbEvidenceLevel::class,

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Herbs Meaning function
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function herbsmeaning(): BelongsTo
    {
        return $this->belongsTo(HerbsMeaning::class);
    }
}
