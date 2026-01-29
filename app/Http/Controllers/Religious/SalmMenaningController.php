<?php

namespace App\Http\Controllers\Religious;

use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Religious\SalmMeaning;

class SalmMenaningController extends Controller
{
    /**
     * Get All Salm function
     *
     * @return void
     */
    public function getSalm(?int $salmNumber = null): JsonResponse
    {
        try {
            if ($salmNumber !== null) {
                $result = SalmMeaning::where('salm_number', $salmNumber)->first();
                if (!$result) return static::sendError(Message::GENERIC_KO, ['context' => 'salm_not_found', 'salm' => $salmNumber], JsonResponse::HTTP_NOT_FOUND);
                return static::sendResponse(Message::SHOW_OK, $result->toArray(), JsonResponse::HTTP_OK);
            }

            $result = SalmMeaning::orderBy('salm_number')->get();
            if ($result->isEmpty()) return static::sendError(Message::GENERIC_KO, ['context' => []], JsonResponse::HTTP_NOT_FOUND);
            return static::sendResponse(Message::SHOW_OK, $result->toArray(), JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            Log::error('Salm get error', ['error' => $e->getMessage()]);
            return static::sendError(Message::GENERIC_KO, ['context' => 'salm_get', 'exception' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Store Salm
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function storeSalm(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'salm_name' => 'required|string',
                'salm_period' => 'nullable|string',
                'salm_number' => 'required|integer|min:1|max:150|unique:salm_meanings,salm_number',
                'salm_orig' => 'required|array',
                'lang' => 'required|array',
            ]);
            $result = SalmMeaning::create($validated);
            if (!$result || !$result->id) {
                return static::sendError(Message::GENERIC_KO, ['context' => 'salm_create_failed'], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
            }

            return static::sendResponse(Message::CREATE_OK, $result, JsonResponse::HTTP_CREATED);
        } catch (\Throwable $e) {
            Log::error('SalmMeaning store error', ['error' => $e->getMessage()]);
            return static::sendError(Message::GENERIC_KO, ['context' => 'salm_store', 'exception' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Update Salm
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateSalm(Request $request, int $id): JsonResponse
    {
        try {
            $salm = SalmMeaning::where('id', $id)->first();
            if (!$salm) return static::sendError(Message::GENERIC_KO, ['context' => 'salm_not_found', 'id' => $id], JsonResponse::HTTP_NOT_FOUND);

            $validated = $request->validate([
                'salm_name' => 'sometimes|string',
                'salm_period' => 'nullable|string',
                'salm_orig' => 'sometimes|array',
                'lang' => 'sometimes|array',
            ]);

            $updated = $salm->update($validated);
            if (!$updated) {
                return static::sendError(Message::GENERIC_KO, ['context' => 'salm_update_failed', 'id' => $id], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
            }

            return static::sendResponse(Message::UPDATE_OK, $salm, JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            Log::error('SalmMeaning update error', ['error' => $e->getMessage()]);
            return static::sendError(Message::GENERIC_KO, ['context' => 'salm_update', 'exception' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete Salm
     *
     * @param int $id
     * @return JsonResponse
     */
    public function deleteSalm(int $id): JsonResponse
    {
        try {
            $salm = SalmMeaning::where('id', $id)->first();
            if (!$salm) return static::sendError(Message::GENERIC_KO, ['context' => 'salm_not_found', 'id' => $id], JsonResponse::HTTP_NOT_FOUND);

            $deleted = $salm->delete();
            if (!$deleted) {
                return static::sendError(Message::GENERIC_KO, ['context' => 'salm_delete_failed', 'id' => $id], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
            }

            return static::sendResponse(Message::DELETE_OK, ['delete' => null], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            Log::error('SalmMeaning delete error', ['error' => $e->getMessage()]);
            return static::sendError(Message::GENERIC_KO, ['context' => 'salm_delete', 'exception' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
