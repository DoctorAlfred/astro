<?php

namespace App\Models\Customer;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AddressBook extends Model
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
        'firstname',
        'lastname',
        'email',
        'phone',
        'city_birth',
        'date_birth',
        'hour_birth',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type'       => 'string',
            'metadata'   => 'array',
            'completed'  => 'boolean',
            'date_birth' => "datetime:d-m-Y",

            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Customer\Customer::class, 'address_book_customer')->withTimestamps();
    }

    protected function dateBirth(): Attribute
    {
        return Attribute::make(
            set: fn($value) => $value ? \Carbon\Carbon::createFromFormat('d-m-Y', $value)->format('d-m-Y') : null,
        );
    }
}
