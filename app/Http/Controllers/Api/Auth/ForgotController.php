<?php

namespace App\Http\Controllers\Api\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Lib\Message;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Auth\ForgotPasswordMail;
use Illuminate\Support\Facades\Validator;

class ForgotController extends Controller
{
    /**
     * Token Generate
     * 
     * @return $randomString 
     */
    public static function generateAlphanumericToken(int $length = 16)
    {
        return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 5)), 0, $length);
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
            $data = $request->all();
            
            $validator = Validator::make($data, [
                'email' => 'required|email',
                'language'  => 'sometimes|nullable|string',
            ]);

            if ($validator->fails()) {
                Log::error(Message::REGISTER_KO, [__METHOD__, json_encode($validator->errors()->toArray())]);
                return $this->sendError(Message::FORGOT_KO, $validator->errors()->toArray(), 400);
            }

            $user = User::where('email', $data['email'])->first();
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
            // Create Link for Reset Password to FrontEnd
            $createLink = config('app.frontend');
            // Gen new code
            $data['token'] = $this->generateAlphanumericToken(16);
            $createdAt = Carbon::now();
            // Update DB
            PasswordReset::create([
                'email' => $data['email'],
                'token' => $data['token'],
                'created_at' => $createdAt
            ]);
            // Send email to user
            Mail::mailer('smtp')->to($data['email'])->send(new ForgotPasswordMail($data, $data['email']));
            $response = [
                'status' => true,
                'message' => 'Password sent!',
                'token' => $data['token'],
                'reset_link' => $createLink . '/password/recovery?token=' . $data['token']
            ];

            return $this->sendResponse(Message::SHOW_OK, $response);
        } catch (\Exception $ex) {
            Log::error(Message::AUTH_KO, [__METHOD__, $ex]);
            return $this->sendError($ex->getMessage());
        }
    }
}
