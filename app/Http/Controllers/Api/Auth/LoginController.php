<?php

namespace App\Http\Controllers\Api\Auth;

use Carbon\Carbon;
use App\Lib\Message;
use App\Models\User;

use App\Mail\Auth\LoginMail;
use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Notifications\VerifyEmail;

class LoginController extends Controller
{
    /**
     * Check Token status
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkTokenResetPassword(Request $request): JsonResponse
    {
        try {
            $tokenValue = $request->token;

            $validator = Validator::make(['token' => $tokenValue], [
                'token' => 'required|string',
            ]);

            if ($validator->fails()) {
                Log::error(Message::AUTH_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::AUTH_KO, $validator->errors()->toArray(), 400);
            }

            $token = DB::table('oauth_access_tokens')
                ->where('id', $tokenValue)
                ->where('revoked', false)
                ->first();

            // Check if the token has expired or not found
            // if (!$token || ($token->expires_at && now()->gte($token->expires_at))) {
            if (!$token || Carbon::parse($token->expires_at)->lte(now())) {
                Log::error(Message::AUTH_KO, [__METHOD__, 'success' => false]);
                return $this->sendError(Message::TOKEN_KO, ['success' => false], 404);
            }

            // If token is valid
            return $this->sendResponse(Message::TOKEN_OK, ['success' => true]);
        } catch (\Exception $ex) {
            Log::error('Authentication error', [__METHOD__, $ex]);
            return response()->json(['success' => false, 'error' => $ex->getMessage()], 403);
        }
    }

    /**
     * Logged-in a single user via API
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($data, [
                'email' => [
                    'required',
                    'email:rfc,dns',
                    // new VerifyEmail,
                ],
                'password'   => [
                    'required',
                    'min:8',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                ],
            ]);

            if ($validator->fails()) {
                Log::error(Message::LOGIN_KO, [__METHOD__, 'email' => $request->email, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::LOGIN_KO, $validator->errors()->toArray(), 400);
            }


            $ip = $request->ip();
            $userAgent = $request->server('HTTP_USER_AGENT');

            $user = User::where('email', $request->email)->with('roles')->first();
            $customer = Customer::where('user_id', $user->id)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return $this->sendError(Message::PASSWORD_KO, ['status' => false]);
            }

            /** Delete Personal Access Token */
            $user->tokens()->delete();

            // Store the token in your custom session storage
            $role = $user->roles->first()->code;
            $permise = $user->roles->first()->code === 'adminx' || $user->roles->first()->code === 'admin' ? 'full' : 'onlyRead';
            $token = $user->createToken('api', ['api', $user->roles->first()->code, $permise, 'astro'])->plainTextToken;

            $request->session()->regenerate();

            /** Send Mail to Logged user and Log the connection */
            Mail::mailer('smtp')->to($request->email)->send(new LoginMail($user, $data['email']));
            // Mail::mailer('smtp')->to($request->email)->bcc(config('app.admin_mail'))->send(new MailRegister($dataToSent));
            Log::info(Message::LOGIN, ['userId' => $user->id, 'email' => $request->email, 'accessDate' => now(), 'ip' => $ip, 'userAgent' => $userAgent, 'token' => $token]);

            return $this->sendResponse(
                Message::AUTH_OK,
                [
                    'userName'    => $user->name,
                    'userSurname' => $user->surname,
                    'userEmail'   => $user->email,
                    'userPhone'   => $user->phone,
                    'customer'    => $customer->id,
                    'role'        => $role,
                    'permise'     => $permise,
                    'token'       => $token
                ]
            );
        } catch (\Exception $ex) {
            Log::error(Message::BAD_REQUEST, [__METHOD__, $ex]);
            return $this->sendError(Message::BAD_REQUEST, [$ex->getMessage()], 400);
        }
    }

    /**
     * Logout - Revoke Token
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $user = $request->user();
        $email = $user->email;

        // $request->user()->currentAccessToken()->delete();
        $user->currentAccessToken()->delete();

        Log::info(Message::LOGOUT, [
            'userEmail' => $email,
            'logoutDate' => now()
        ]);

        // $request->session()->flush();
        // $request->session()->invalidate();

        return $this->sendResponse(Message::LOGOUT, ['logout' => $request->user()->email]);
    }
}
