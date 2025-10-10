<?php

namespace App\Http\Controllers\Api\Auth;

use App\Lib\Message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

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
        $request->validate([
            'token' => 'required|string',
            'password'   => [
                'required',
                'min:8',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'required_with:confirmed',
                'same:confirmed'
            ],
            'confirmed'  => 'required'
        ]);

        // find the code
        $passwordReset = PasswordReset::where('token', $request->token)->first();

        if (!$passwordReset ) {
            $response = [
                'message' => 'The token you entered does not appear to exist or is incorrect!'
            ];
            Log::error(Message::DELETE_KO, [$response, __METHOD__]);
            return $this->sendError( Message::RESET_PASSWORD_KO, $response);
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
