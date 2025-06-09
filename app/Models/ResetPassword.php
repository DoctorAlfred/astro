<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResetPassword extends Model
{
    use CanResetPassword, HasFactory, Notifiable;

    /** @var Table */
    protected $table = 'password_reset_tokens';
    /** @var DisableTimestamps */
    public $timestamps = false;
    /** @var Primary Key */
    protected $primaryKey = 'email';
    /** */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * Override the getKeyName method to explicitly set the primary key
     *
     * @return string
     */
    public function getKeyName()
    {
        return 'email';
    }
}
