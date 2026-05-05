<?php

namespace App\Models\Diaries;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Diary extends Model
{
    use HasApiTokens, HasFactory, HasUuids, Notifiable, SoftDeletes;
    /** Disabilita incremento automatico */
    public $incrementing = false;
    /** Chiave primaria sarà stringa (UUID) */
    protected $keyType = 'string';

    /** Fillable **/
    protected $fillable = [
        'user_id',
        'entry_date',
        'title',
        'category',
        'description',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'deleted_at'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string, bool, datetime>
     */
    protected function casts(): array
    {
        return [
            'entry_date' => 'date:d-m-Y',

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Is editable function - MAX 7 DAYS
     *
     * @return boolean
     */
    public function isEditable(): bool
    {
        return $this->created_at->diffInDays(now()) <= 7;
    }
}
