<?php

namespace App\Http\Controllers\Herb;

use App\Lib\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Services\Herbs\HerbsServices;
use App\Http\Requests\Herbs\HerbsRequest;

class HerbController extends Controller
{
    /**
     * Request a Herbs Services
     *
     * @var HerbsServices $herbs
     */
    protected HerbsServices $herbs;

    /**
     * Construct function
     *
     * @param HerbsServices $herbs
     */
    public function __construct(HerbsServices $herbs)
    {
        $this->herbs = $herbs;
    }

    /**
     * Show herb details
     * - Scheda completa pianta (scientifica + simbolica)
     *
     * @param HerbsRequest $request
     * @return JsonResponse
     */
    public function show(HerbsRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $language = $data['language'] ?? 'it-IT';

            $result = $this->herbs->getHerb(
                $data['name'],
                $language
            );

            return static::sendResponse(
                Message::SHOW_OK,
                $result,
                JsonResponse::HTTP_OK
            );

        } catch (\Throwable $e) {
            Log::error('Herbs show error', [
                'error'   => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
                'payload' => $request->all(),
            ]);

            return static::sendError(
                Message::GENERIC_KO,
                [
                    'context'   => 'herbs_show',
                    'exception' => $e->getMessage(),
                ],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
