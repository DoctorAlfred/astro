<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Services\Numerology\NumerologyServices;

class NumerologyController extends Controller
{
    /** @var \App\Services\Numerology\NumerologyServices $numerologyService */
    private NumerologyServices $numerologyServices;

    /**
     * Construct function
     *
     * @param NumerologyServices $numerologyServices
     */
    public function __construct(NumerologyServices $numerologyServices)
    {
        $this->numerologyServices = $numerologyServices;
    }

    /**
     * NAI From Date function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function naiFromDate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'birthDate' => 'required|date_format:d-m-Y',
            ]);

            $nai = $this->numerologyServices->calculateNAIFromDate(
                $request->input('birthDate')
            );

            return $this->sendResponse(Message::SHOW_OK, [
                'status' => 'success',
                'matrix' => $nai,
            ], 200);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * NAI From Name function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function naiFromName(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'firstName' => 'required|string|max:100',
                'lastName'  => 'required|string|max:100',
            ]);

            $nai = $this->numerologyServices->calculateNAIFromName(
                $request->input('firstName'),
                $request->input('lastName')
            );

            return $this->sendResponse(Message::SHOW_OK, [
                'status' => 'success',
                'matrix' => $nai,
            ], 200);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * NAI Matrix function
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function naiMatrix(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'birthDate' => 'required|date_format:Y-m-d',
                'firstName' => 'required|string|max:100',
                'lastName'  => 'required|string|max:100',
                'language'  => 'sometimes|nullable|string|max:2',
            ]);

            $matrix = $this->numerologyServices->calculateNAIMatrix(
                $request->input('birthDate'),
                $request->input('firstName'),
                $request->input('lastName'),
                $request->input('language')
            );

            return $this->sendResponse(Message::SHOW_OK, [
                'status' => 'success',
                'matrix' => $matrix,
            ], 200);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}
