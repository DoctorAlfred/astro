<?php

namespace App\Http\Controllers\Api\Auth;

use Carbon\Carbon;
use App\Lib\Message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ForgotController extends Controller
{
    /**
     * Token Generate
     * 
     * @return $randomString 
     */
    public static function generateAlphanumericToken($length = 64)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    /**
     * Forgot Password function
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse $response
     */
    public function forgot(Request $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'email' => 'required|email',
                'lang'  => 'required|string',
                'from'  => 'required|string'
            ]);

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                Log::error(Message::USER_NOT_FOUND, [__METHOD__, $user]);
                $errors = [
                    'status' => false,
                    'message' => Message::USER_NOT_EXIST
                ];

                return $this->sendError(Message::USER_NOT_FOUND, $errors, 404);
            }

            // Delete all old code that user send before.
            PasswordReset::where('email', $request->email)->delete();

            // Generate random code
            $data['token'] = $this->generateAlphanumericToken(16);

            $data['created_at'] = Carbon::now();
            // Create Link for Reset Password to FrontEnd
            $createLink = config('app.frontend');
            // Create a new code
            $token = PasswordReset::create($data);

            $tokenData = [
                'token' => $token->token,
                'reset' => $createLink . '/password/recovery?token=' . $token->token
            ];

            // Send email to user
            // Mail::to($request->email)->send(new ForgotPasswordMail($tokenData, $from));

            $response = [
                'status' => 'Sent',
                'message' => trans('passwords.sent'),
                'reset' => $tokenData['reset']
            ];

            return $this->sendResponse(Message::SHOW_OK, $response);
        } catch (\Exception $ex) {
            Log::error(Message::AUTH_KO, [__METHOD__, $ex]);
            return $this->sendError($ex->getMessage());
        }
    }
}
