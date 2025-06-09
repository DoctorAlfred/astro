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
    protected $perPage = 24;

    /**
     * Method to send response
     *
     * @param array $data
     * @param string $message
     * @param int $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendResponse(
        $message = null,
        array $data,
        int $statusCode = JsonResponse::HTTP_OK
    ): JsonResponse {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($response, $statusCode, array('Content-Type'=>'application/json; charset=utf-8'));
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
     * @param string $error
     * @param array $errorMessages
     * @param int $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendError(
        string $error = Message::GENERIC_KO,
        array $errorMessages = [],
        int $statusCode = JsonResponse::HTTP_INTERNAL_SERVER_ERROR
    ): JsonResponse {
        $response = [
            'success' => false,
            'message' => $error
        ];

        if (!empty($errorMessages)) {
            $response['errors'] = $errorMessages;
        }

        return response()->json($response, $statusCode, array('Content-Type' => 'application/json; charset=utf-8'));
    }
}
