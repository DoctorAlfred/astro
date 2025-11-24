<?php

namespace App\Http\Controllers;

use App\Lib\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** @var mixed */
    protected $model;

    /** @var int */
    protected $perPage = 12;

    /**
     * Method to send response
     *
     * @param string $message
     * @param array $data
     * @param int $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendResponse(
        $message = null,
        array $data,
        int $statusCode = JsonResponse::HTTP_OK
    ): JsonResponse {
        return response()->json(
            [
                'success' => true,
                'message' => $message,
                'data' => $data
            ],
            $statusCode,
            ['Content-Type' => 'application/json; charset=utf-8']
        );
    }

    /**
     * Method to send not found error
     *
     * @param string $error
     * @param array $errorMessages
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendNotFound(
        string $error = Message::NOT_FOUND,
        array $errorMessages = []
    ): JsonResponse {
        return self::sendError($error, $errorMessages, JsonResponse::HTTP_NOT_FOUND);
    }

    /**
     * Method to send response error
     *
     * @param string $message
     * @param array $errorData
     * @param int $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendError(
        string $message = Message::GENERIC_KO,
        array $errorData = [],
        int $statusCode = JsonResponse::HTTP_INTERNAL_SERVER_ERROR
    ): JsonResponse {
        return response()->json(
            [
                'success' => false,
                'errors' => $message,
                'data' => $errorData
            ],
            $statusCode,
            ['Content-Type' => 'application/json; charset=utf-8']
        );
    }
}
