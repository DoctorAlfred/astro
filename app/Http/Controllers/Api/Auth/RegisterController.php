<?php

namespace App\Http\Controllers\Api\Auth;

use Carbon\Carbon;
use App\Lib\Message;
use App\Models\Role;
use App\Models\User;
use App\Models\Shop\Plan;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Mail\Auth\RegisterMail;
use App\Models\Shop\Subscription;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Registers a single user via API
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        try {

            $data = $request->all();

            $validator = Validator::make($data, [
                'firstname' => 'required|string|min:3',
                'lastname'  => 'required|string|min:2',
                'email' => [
                    'required',
                    'email:rfc,dns',
                ],
                'phone'     => 'nullable|string|min:9',
                'password'  => [
                    'required',
                    'min:8',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                    'required_with:confirmed',
                    'same:confirmed'
                ],
                'confirmed' => 'required'
            ]);

            if ($validator->fails()) {
                Log::error(Message::REGISTER_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::REGISTER_KO, $validator->errors()->toArray(), 400);
            }

            $existUserToDb = User::withTrashed()
                ->where('email', $request->email)
                ->select(
                    'id',
                    'firstname',
                    'lastname',
                    'email',
                    'phone',
                    'from',
                    'ip',
                    'user_agent',
                    'deleted_at'
                )
                ->first();

            if ($existUserToDb) {
                $existUser = [
                    'id' => $existUserToDb->id,
                    'firstname' => $existUserToDb->firstname,
                    'lastname' => $existUserToDb->lastname,
                    'email' => $existUserToDb->email,
                    'phone' => $existUserToDb->phone,
                    'from' => $existUserToDb->from,
                    'ip' => $existUserToDb->ip,
                    'user_agent' => $existUserToDb->user_agent,
                    'deleted_at' => $existUserToDb->deleted_at,
                ];

                Log::warning('Existing user', ['user' => $existUser]);
                if ($existUser['deleted_at']) {
                    // dd('reg', $existUser);
                    $recover = $existUserToDb->restore();
                    Log::warning('Restore user', ['recover' => $recover]);
                    if ($recover) {
                        $role = Role::where('name', 'User')->first();
                        $existUserToDb->roles()->attach($role);

                        $permission = Permission::where('name', 'User')->first();
                        $existUserToDb->permissions()->attach($permission);

                        DB::table('permission_user')
                            ->where('user_id', $existUserToDb->id)
                            ->update([
                                'is_active'     => 1,
                                'is_banned'     => 0,
                                'first_in'      => false,
                                'first_login'   => false,
                                'created_at'    => now(),
                                'updated_at'    => now()
                            ]);

                        $response = [
                            'user' => $request->email,
                            'message' => 'Recover Account Succesfully - please repeat login and update your data'
                        ];
                        return $this->sendResponse(Message::USER_RESTORED_OK, $response, 201);
                    }

                    Log::info(Message::REGISTER_OK, ['Firstname' => $request->firstname, 'Lastname' => $request->lastname, 'email' => $request->email, 'registerDate' => now()]);
                    return $this->sendResponse(Message::REGISTER_OK, ['token' => $existUser], 201);
                } else {
                    $error = [
                        'code' => 403,
                        'user' => $existUserToDb->email,
                        'message' => 'This email is already registered'
                    ];
                    Log::error(Message::REGISTER_KO, [__METHOD__, $error]);
                    return $this->sendError(Message::REGISTER_KO, $error, 403);
                }
            }

            $from = strtolower($request->from) ?? 'astro';

            $createLink = config('app.frontend');

            $request['ip'] = $request->ip();
            $request['userAgent'] = $request->server('HTTP_USER_AGENT') ?? $from;

            $newUser = User::create($request);

            $now = Carbon::now();
            $formattedNow = $now->format('d-m-Y H:i:s');

            $dataToSent = [
                'firstname' => $request->firstname,
                'lastname'  => $request->lastname,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'today'     => $formattedNow,
                'confirm'   => $createLink . 'confirm/?id=' . $newUser['userId'],
                'registerDate' => now()
            ];

            try {
                $plan = Plan::where('slug', 'free')->first();
                if ($plan) {
                    Subscription::create([
                        'user_id'       => $newUser['id'],
                        'plan_id'       => $plan->id,
                        'price_paid'    => 0.00,
                        'billing_cycle' => 'annual',
                        'starts_at'     => now(),
                        'expires_at'    => now()->addYears(1), // Free 1 anno
                        'is_active'     => true,
                    ]);
                }
            } catch (\Exception $e) {
                Log::error("Errore assegnazione piano iniziale: " . $e->getMessage());
            }

            Mail::mailer('smtp')->to($request->email)->bcc(config('app.admin'))->send(new RegisterMail($dataToSent, $from));
            Log::info(Message::REGISTER_OK, $dataToSent);

            return $this->sendResponse(Message::REGISTER_OK, ['token' => $newUser], 201);
        } catch (\Throwable $ex) {
            Log::error(Message::BAD_REQUEST, [__METHOD__, $ex]);
            return $this->sendError(Message::BAD_REQUEST, [$ex->getMessage()], 400);
        }
    }
}
