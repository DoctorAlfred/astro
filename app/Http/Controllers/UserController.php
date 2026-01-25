<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Lib\Message;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends AuthController
{
    /**
     * Me Contructor use Auth->Sanctum
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Return user logged profile
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(): JsonResponse
    {
        try {
            $user = $this->user;
            if ($user) {
                $customer = $this->customer;
                return $this->sendResponse(Message::SHOW_OK, ['user' => $user, 'customer' => $customer]);
            }

            Log::error(Message::USER_NOT_FOUND);
            return $this->sendError(Message::SHOW_KO, ['user' => 'none']);
        } catch (\Exception $er) {
            Log::error(Message::SHOW_KO, [__METHOD__, $er]);
            return $this->sendError(Message::SHOW_KO, [$er->getMessage(), 400]);
        }
    }

    /**
     * Get All Users or single User function
     *
     * @param string|null $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers(?string $id = null): JsonResponse
    {
        try {
            $users = [];

            $users = User::select([
                'id',
                'firstname',
                'lastname',
                'email',
                'city_birth',
                'date_birth',
                'hour_birth',
                'from',
                'ip',
                'user_agent as userAgent',
                'created_at as create',
                'updated_at as update'
            ])
                ->when($id, function ($query) use ($id) {
                    $query->where(function ($where) use ($id) {
                        $where->where('id', $id)
                            ->orWhere('email', $id)
                            ->orWhere('lastname', $id);
                    });
                })
                ->with('roles')
                ->get()
                ->toArray();

            if (empty($users)) {
                return $this->sendError(Message::SHOW_KO, [
                    'status' => false,
                    'users' => []
                ], 404);
            }
            return $this->sendResponse(Message::SHOW_OK, $users);
        } catch (\Exception $er) {
            Log::error(Message::SHOW_KO, [__METHOD__, $er]);
            return $this->sendError(Message::SHOW_KO, [$er->getMessage(), 400]);
        }
    }

    /**
     * Add New User function
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function addNewUser(Request $request): JsonResponse // TO-DO only for admin
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'firstname'  => 'required|string|min:3',
                'lastname'   => 'required|string|min:2',
                'email'      => 'required|email:rfc,dns',
                'phone'      => 'nullable|string|min:8',
                'city_birth'  => 'nullable|string|min:2',
                'date_birth'  => 'nullable|string|min:8',
                'hour_birth'  => 'nullable|string|min:3',
                'password'   => [
                    'required',
                    'min:8',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                ],
            ]);

            if ($validator->fails()) {
                Log::error(Message::AUTH_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::REGISTER_KO, $validator->errors()->toArray(), 400);
            }

            $user = User::where('email', $request->email)->first();
            if ($user) {
                Log::error(Message::CREATE_KO, [__METHOD__, 'error' => Message::CREATE_KO, 'user' => 'exist']);
                return $this->sendError(Message::CREATE_KO, ['user' => 'exist']);
            }

            $ip = $request->ip();
            $userAgent = $request->server('HTTP_USER_AGENT') ?? '';

            $dateBirth = null;
            if ($request->filled('date_birth')) {
                $dateBirth = Carbon::createFromFormat('d-m-Y', $request->date_birth)->format('Y-m-d');
            }

            $hourBirth = null;
            if ($request->filled('hour_birth')) {
                $hourBirth = Carbon::createFromFormat('H:i', $request->hour_birth)->format('H:i:s');
            }

            $firstname  = ucfirst(mb_strtolower($request->firstname, 'UTF-8'));
            $lastname   = ucfirst(mb_strtolower($request->lastname, 'UTF-8'));
            $cityBirth  = $request->filled('city_birth')
                ? ucfirst(mb_strtolower($request->city_birth, 'UTF-8'))
                : null;

            $payload = [
                'firstname'  => $firstname,
                'lastname'   => $lastname,
                'phone'      => $request->phone ?? null,
                'email'      => $request->email,
                'password'   => $request->password,
                'city_birth' => $cityBirth ?? null,
                'date_birth' => $dateBirth,
                'hour_birth' => $hourBirth,
                'from'       => 'astro',
                'priority'   => 0,
                'ip'         => $ip,
                'user_agent' => $userAgent,
            ];

            $newUser = User::createUser($payload);

            Customer::firstOrCreate([
                'user_id'         => $newUser['userId'],
                'type'            => 'private',
                'company'         => null,
                'email'           => $request->password,
                'address'         => null,
                'city_id'         => null,
                'country'         => null,
                'vat'             => null,
                'identity_number' => null,
                'completed'       => false,
                'metadata'        => [
                    'ip'         => $ip,
                    'user_agent' => $userAgent,
                ]
            ]);

            if ($this->user['role'] === 'admin') {
                // $scopes = ['api', 'user', 'full', 'astro'];
                $roleName = 'User';
                $permissionName = 'User';
                $permData = [
                    'level' => 1,
                    'is_active' => 1,
                    'is_banned' => 0,
                    'first_in' => false,
                    'first_login' => false,
                ];

                $role = Role::where('name', $roleName)->first();
                $permission = Permission::where('name', $permissionName)->first();

                User::find($newUser['userId'])->roles()->syncWithoutDetaching([$role->id]);
                User::find($newUser['userId'])->permissions()->syncWithoutDetaching([$permission->id]);

                DB::table('permission_user')->updateOrInsert(
                    ['user_id' => $newUser['userId']],
                    array_merge($permData, [
                        'created_at' => now(),
                        'updated_at' => now()
                    ])
                );

                if ($newUser) {
                    return $this->sendResponse(Message::CREATE_OK, $newUser);
                }

                Log::error(Message::CREATE_KO, [__METHOD__, 'error' => Message::CREATE_KO]);
                return $this->sendError(Message::CREATE_KO, $newUser);
            } else {
                Log::error(Message::CREATE_KO, [__METHOD__, 'error' => Message::CREATE_KO]);
                return $this->sendError(Message::CREATE_KO, [
                    'status' => false,
                    'user' => 'You do not have administrator privileges'
                ]);
            }
        } catch (\Exception $er) {
            Log::error(Message::SHOW_KO, [__METHOD__, $er]);
            return $this->sendError(Message::SHOW_KO, [$er->getMessage(), 400]);
        }
    }

    /**
     * Update User by Admin
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateUser(Request $request): JsonResponse
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'email'     => 'required|string',
                'firstname' => 'nullable|string',
                'lastname'  => 'nullable|string',
                'from'      => 'nullable|string',
                'psw'       => 'nullable|string',
            ]);

            if ($validator->fails()) {
                Log::error(Message::UPDATE_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::UPDATE_KO, $validator->errors()->toArray(), 400);
            }

            $user = $this->user['role'] === 'admin' ? User::where('email', $data['email']) : User::where('email', $this->user['email']);
            $status = false;

            $haveUser = $user->first();
            if (!$haveUser) {
                return $this->sendError(Message::UPDATE_KO, ['user' => null], 304);
            }

            if ($user->first() && isset($request->password)) {
                $user->update(['password' => Hash::make($request->password)]);
                $status = true;
            }

            if ($user->first() && isset($request->name)) {
                $user->update(['name' => $request->name]);
                $status = true;
            }

            if ($user->first() && isset($request->surname)) {
                $user->update(['surname' => $request->surname]);
                $status = true;
            }

            if ($user->first() && isset($request->from)) {
                $user->update(['from' => $request->from]);
                $status = true;
            }

            if ($status) {
                return $this->sendResponse(Message::UPDATE_OK, ['status' => true, 'user' => $haveUser], 201);
            } else {
                return $this->sendError(Message::UPDATE_KO, ['status' => false], 304);
            }
        } catch (\Exception $er) {
            Log::error(Message::BAD_REQUEST, [__METHOD__, $er]);
            return $this->sendError(Message::BAD_REQUEST, [$er->getMessage()], 404);
        }
    }

    /**
     * Delete User by Admin
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUser(string $id): JsonResponse
    {
        try {
            if ($this->user['role'] === 'admin') {
                $user = User::where('id', $id)
                    ->orWhere('email', $id)
                    ->first();
            } else {
                $user = User::where('id', $this->user['id'])
                    ->first();
            }

            if ($user) {
                // TO-DO pulire tutti i dati compresi i siti ed altre situazioni
                $user->permissions()->detach();
                $user->roles()->detach();
                $user->delete();

                return $this->sendResponse(Message::DELETE_OK, ['user' => 'The user was successfully deleted'], 201);
            } else {
                return $this->sendError(Message::DELETE_KO, ['user' => 'not-found'], 204);
            }
        } catch (\Exception $er) {
            Log::error(Message::DELETE_KO, [__METHOD__, $er]);
            return $this->sendError(Message::DELETE_KO, [$er->getMessage()], 401);
        }
    }

    /**
     * Change User Role
     * @param string $role
     * @param string $userId
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeUserRole(Request $request): JsonResponse
    {
        try {

            $data = $request->all();

            $validator = Validator::make($data, [
                'role'   => 'required|string|min:3',
                'userId' => 'required|string|min:2',
            ]);

            if ($validator->fails()) {
                Log::error(Message::AUTH_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::REGISTER_KO, $validator->errors()->toArray(), 400);
            }

            $changeRole = User::changeRole($data['userId'], $data['role']);
            if ($changeRole) {
                return $this->sendResponse(Message::UPDATE_OK, ['role' => 'changed'], 201);
            }
            return $this->sendError(Message::ROLE_KO, ['role' => 'not-changed'], 412);
        } catch (\Exception $er) {
            Log::error(Message::ROLE_KO, [__METHOD__, $er]);
            return $this->sendError(Message::ROLE_KO, [$er->getMessage()], 401);
        }
    }

    /**
     * Change User Permissions
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeUserPersmissions(Request $request): JsonResponse
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'userId'         => 'required|string|min:30',
                'permissionName' => 'nullable|string',
                'level'          => 'nullable|numeric',
                'isActive'       => 'nullable|boolean',
                'isBanned'       => 'nullable|boolean',
                'slot'           => 'nullable|numeric',
                'permise'        => 'nullable|string',
            ]);

            if ($validator->fails()) {
                Log::error(Message::BAD_REQUEST, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::BAD_REQUEST, $validator->errors()->toArray(), 400);
            }

            $changed = User::changePermission($request->all());

            if ($changed) {
                return $this->sendResponse(Message::UPDATE_OK, ['role' => 'changed'], 201);
            } else {
                return $this->sendError(Message::PERMISSIONS_NOT_CHANGED, ['permission' => 'not-changed'], 412);
            }
        } catch (\Exception $er) {
            Log::error(Message::PERMISSIONS_NOT_CHANGED, [__METHOD__, $er]);
            return $this->sendError(Message::PERMISSIONS_NOT_CHANGED, [$er->getMessage()], 401);
        }
    }
}
