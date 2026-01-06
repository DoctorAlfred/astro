<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use App\Models\Customer\Customer;
use App\Models\Shop\Subscription;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\NewAccessToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
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
        'firstname',
        'lastname',
        'email',
        'phone',
        'password',
        'from',
        'ip',
        'user_agent',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'created_at' => "datetime:d-m-Y H:i",
            'updated_at' => "datetime:d-m-Y H:i",
            'deleted_at' => "datetime:d-m-Y H:i",
        ];
    }

    /**
     * Boot function
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * Get the attributes that should be appends.
     *
     * @var array<string, string>
     */
    protected $appends = [
        'role',
        'permission',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Role::class, 'role_user', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions(): BelongsToMany // Associate each user with their assigned permissions or privileges
    {
        return $this->belongsToMany(\App\Models\Permission::class);
    }

    /**
     * @return string|null getRoleCodeAttribute
     */
    public function getRoleAttribute(): ?string
    {
        return $this->roles()->first()?->code;
    }

    /**
     * @return string|null getPermissionCodeAttribute
     */
    public function getPermissionAttribute(): ?string
    {
        return $this->permissions()->first()?->code;
    }

    /**
     * Change User Role
     * @param string $userId
     * @param string $role
     * @return bool
     */
    public static function changeRole(string $userId, string $role): bool
    {
        $user = User::where('id', $userId)->first();
        if (!$user) {
            return false;
        }

        $role = Role::where('name', $role)->first();
        if (!$role) {
            return false;
        }

        $permission = Permission::where('name', $role->name)->first();
        if (!$permission) {
            return false;
        }

        $change = $user->roles()->sync($role);
        $user->permissions()->sync($permission);

        if ($change['attached']) {

            DB::table('permission_user')->where('user_id', $userId)
                ->update([
                    'level' => 1,
                    'is_active' => true,
                    'is_banned' => 'false',
                    'first_in' => 0,
                    'first_login' => 0
                ]);

            return true;
        }

        return false;
    }

    /**
     * Change User Permissions
     * @param array $params
     * @return bool
     */
    public static function changePermission(array $params): bool
    {
        $updateData = [];
        $updated = false;

        if (isset($params['level']) && $params['level'] !== '') {
            $updateData['level'] = $params['level'];
        }

        if (isset($params['isActive']) && $params['isActive'] !== '') {
            $updateData['is_active'] = $params['isActive'];
        }

        if (isset($params['isBanned']) && $params['isBanned'] !== '') {
            $updateData['is_banned'] = $params['isBanned'];
        }

        if (isset($params['permise'])) {
            $updateData['permise'] = $params['permise'];
        }

        if (!empty($updateData)) {
            $updateData['updated_at'] = now();

            $updated = DB::table('permission_user')
                ->where('user_id', $params['userId'])
                ->update($updateData);
        }

        if ($updated) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get User Information function
     *
     * @param string $id
     * @return array $me
     */
    public static function getUserInfo(string $id): array
    {
        $me = self::where('id', $id)
            ->select(
                'id',
                'name',
                'surname',
                'email',
                'phone',
                'from',
                'ip'
            )
            ->first()
            ->toArray();

        return $me;
    }

    /**
     * Custom Create Token for Sanctum
     *
     * @param string $from
     * @param array $abilities
     * @return \Laravel\Sanctum\NewAccessToken
     */
    public function createToken(string $from, array $abilities = ['*']): NewAccessToken
    {
        $plainTextToken = Str::random(240);

        $token = $this->tokens()->create([
            'name' => $from,
            'token' => hash('sha256', $plainTextToken = Str::random(240)),
            'abilities' => $abilities,
        ]);

        return new NewAccessToken($token, $token->id . '|' . $plainTextToken);
    }

    /**
     * Create User First Season
     * @param mixed $payload
     * @return array $token
     */
    public static function create(mixed $payload)
    {
        $password = Hash::make($payload['password']);
        // Filter
        $email = strtolower($payload['email']);
        $from = $payload['from'] ? strtolower($payload['from']) : 'astro';

        $user = self::firstOrCreate([
            'firstname'         => ucwords(strtolower($payload['firstname'])),
            'lastname'          => ucwords(strtolower($payload['lastname'])),
            'email'             => $email,
            'email_verified_at' => $payload['email_verified_at'] ?? null,
            'phone'             => $payload['phone'],
            'password'          => $password,
            'from'              => $from,
            'ip'                => $payload['ip'] ?? null,
            'user_agent'        => $payload['userAgent'] ?? null,
        ]);

        Customer::firstOrCreate([
            'user_id'         => $user->id,
            'type'            => 'astro',
            'email'           => null,
            'phone'           => null,
            'address'         => null,
            'city_id'         => null,
            'country'         => null,
            'vat'             => null,
            'identity_number' => null,
        ]);

        if ($email === config('app.admin')) {
            $scopes = ['api', 'admin', 'full', $from];
            $roleName = 'Admin';
            $permissionName = 'Admin';
            $permData = [
                'level' => 9,
                'is_active' => 1,
                'is_banned' => 0,
                'first_in' => false,
                'first_login' => false,
            ];
        } else {
            $scopes = ['api', 'user', 'readOnly', $from];
            $roleName = 'User';
            $permissionName = 'User';
            $permData = [
                'level' => 0,
                'is_active' => 0,
                'is_banned' => 0,
                'first_in' => true,
                'first_login' => true,
            ];
        }

        $token = $user->createToken('Astro', $scopes)->plainTextToken;

        $role = Role::where('name', $roleName)->first();
        $permission = Permission::where('name', $permissionName)->first();
        $user->roles()->syncWithoutDetaching([$role->id]);
        $user->permissions()->syncWithoutDetaching([$permission->id]);

        DB::table('permission_user')->updateOrInsert(
            ['user_id' => $user->id],
            array_merge($permData, [
                'created_at' => now(),
                'updated_at' => now()
            ])
        );

        return [
            'token' => $token,
            'userId' => $user->id
        ];
    }

    /**
     * Check if User Auth function
     *
     * @param [type] $auth
     * @return void
     */
    public static function checkUserAuth($auth)
    {
        $userData = self::where('id', $auth->id)
            ->select(
                'id',
                'firstname',
                'lastname',
                'email',
                'phone',
                'from',
                'ip',
                'user_agent'
            )
            ->first();

        $user = [
            'id'         => $userData->id,
            'firstname'  => $userData->name,
            'lastname'   => $userData->surname,
            'email'      => $userData->email,
            'phone'      => $userData->phone,
            'from'       => $userData->from,
            'ip'         => $userData->ip,
            'user_agent' => $userData->user_agent,
        ];

        return $user;
    }

    /**
     * Have a Role function
     *
     * @param array $user
     * @return mixed $role
     */
    public static function haveRole($user): string
    {
        $user = self::where('id', $user['id'])->first();
        return $user->roles()->first()->code ?? null;
    }

    /**
     * Have a Permissions function
     *
     * @param array $user
     * @return mixed $role
     */
    public static function havePermissions($user): string
    {
        $user = self::where('id', $user['id'])->first();
        return $user->permissions()->first()->code ?? null;
    }

    /**
     * Has Active Subscription function
     *
     * @return boolean
     */
    public function hasActiveSubscription()
    {
        return Subscription::where('is_active', true)
            ->where('expires_at', '>', now())
            ->exists();
    }

    /**
     * Can Write Diary function
     *
     * @return boolean
     */
    public function canWriteDiary()
    {
        if ($this->role === 'admin') return true;

        $sub = Subscription::where('is_active', true)->first();
        return $sub ? $sub->plan->can_write_diary : false;
    }

    /**
     * Subscriptions function
     *
     * @return void
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
