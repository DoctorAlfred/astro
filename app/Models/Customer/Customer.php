<?php

namespace App\Models\Customer;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
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
        'user_id',
        'type',         // staff - commercial - internal - private - retailer
        'company_name',
        'company_email',
        'company_from',
        'company_ip',
        'company_user_agent',
        'company_address',
        'city_id',
        'country',
        'vat',
        'identity_number',
        'completed',
        'metadata'
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
            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Get Customer Info function
     *
     * @return array
     */
    public static function getCustomerInfo(string $userId): array
    {
        return (array) self::with('user')
            ->where('user_id', $userId)
            ->first()
            ->toArray();
    }
}
