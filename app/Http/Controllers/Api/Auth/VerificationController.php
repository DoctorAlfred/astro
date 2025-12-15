<?php

namespace App\Http\Controllers\Api\Auth;

use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Laravel\Sanctum\PersonalAccessToken;

class VerificationController extends Controller
{
    /**
     * Check Token status
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkToken(string $tokenValue): JsonResponse
    {
        try {
            $token = PersonalAccessToken::findToken($tokenValue);

            // Check if the token has expired or not found
            if (!$token || ($token->expires_at && now()->gte($token->expires_at))) {
                Log::error(Message::TOKEN_KO, [__METHOD__, 'success' => false]);
                return $this->sendError(Message::TOKEN_KO, ['success' => false], 404);
            }

            // If token is valid
            return $this->sendResponse(Message::TOKEN_OK, ['success' => true]);
        } catch (\Exception $ex) {
            Log::error('Authentication error', [__METHOD__, $ex]);
            return response()->json(['success' => false, 'error' => $ex->getMessage()], 403);
        }
    }
}
