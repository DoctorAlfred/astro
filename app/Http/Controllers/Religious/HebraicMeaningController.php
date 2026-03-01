<?php

namespace App\Http\Controllers\Religious;

use App\Http\Controllers\Controller;
use App\Lib\Message;
use App\Models\Religious\HebraicMeaning;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HebraicMeaningController extends Controller
{
    /**
     * Get Hebraic Letters function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getHebraicLetters(Request $request): JsonResponse
    {

        try {
            $language = strtolower($request->get('language', 'it'));

            $query = HebraicMeaning::query();

            /*
            |--------------------------------------------------------------------------
            | FILTER: PRIMARY
            |--------------------------------------------------------------------------
            */
            if ($request->has('primary')) {
                $query->where('is_primary', filter_var($request->get('primary'), FILTER_VALIDATE_BOOLEAN));
            }

            /*
            |--------------------------------------------------------------------------
            | FILTER: FINAL
            |--------------------------------------------------------------------------
            */
            if ($request->has('final')) {
                $query->where('is_final', filter_var($request->get('final'), FILTER_VALIDATE_BOOLEAN));
            }

            /*
            |--------------------------------------------------------------------------
            | FILTER: CLASSIFICATION (Sefer Yetzirah)
            |--------------------------------------------------------------------------
            */
            if ($request->filled('classification')) {
                $classification = strtolower($request->get('classification'));

                $query->where('classification_sefer_yetzirah', $classification);
            }

            /*
            |--------------------------------------------------------------------------
            | ORDER BY NUMBER (canonical order 1–27)
            |--------------------------------------------------------------------------
            */
            $result = $query->orderBy('number', 'asc')->get();

            if ($result->isEmpty()) {
                return static::sendError(
                    Message::GENERIC_KO,
                    ['context' => 'hebraic_letters_not_found'],
                    JsonResponse::HTTP_NOT_FOUND
                );
            }

            return static::sendResponse(
                Message::SHOW_OK,
                $result->map(fn($item) => $item->toApiArrayByLanguage($language))
                    ->values()
                    ->toArray(),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $e) {

            Log::error('Hebraic letters get error', [
                'error' => $e->getMessage()
            ]);

            return static::sendError(
                Message::GENERIC_KO,
                [
                    'context'   => 'hebraic_letters_get',
                    'exception' => $e->getMessage()
                ],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
