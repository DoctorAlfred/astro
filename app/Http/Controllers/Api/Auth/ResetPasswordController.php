<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Lib\Message;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class ResetPasswordController extends Controller
{
    /**
     * Reset Password Token
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request): JsonResponse
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'token' => 'required|string',
            'password'   => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation'  => 'required'
        ]);

        if ($validator->fails()) {
            /**
             * RISPOSTE
             * "password": [
             *   "The password field confirmation does not match.",
             *   "The password field must be at least 8 characters.",
             *   "The password field must contain at least one symbol.",
             *   "The password field must contain at least one number."
             * ],
             * "confirmed": [
             *   "The confirmed field is required."
             * ]
             */ 

            Log::error(Message::REGISTER_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
            return $this->sendError(Message::FORGOT_KO, $validator->errors()->toArray(), 400);
        }

        // find the code
        $passwordReset = PasswordReset::where('token', $data['token'])->first();
        if (!$passwordReset) {
            $response = [
                'message' => 'The token you entered does not appear to exist or is incorrect!'
            ];
            Log::error(Message::DELETE_KO, [$response, __METHOD__]);
            return $this->sendError(Message::RESET_PASSWORD_KO, $response);
        }

        // check if it does not expired: the time is one hour
        if ($passwordReset->created_at > now()->addHour()) {
            $passwordReset->delete();
            return $this->sendError(Message::PASSWORD_EXPIRED, ['time' => $passwordReset->created_at], 422);
        }

        // find user's email
        $user = User::where('email', $passwordReset->email)->first();
        // update user password
        $user->update($request->only('password'));
        // delete current code
        $passwordReset->delete();

        $response = [
            'status' => true,
            'message' => 'password successfully changed!'
        ];

        return $this->sendResponse(Message::SHOW_OK, $response);
    }
}
