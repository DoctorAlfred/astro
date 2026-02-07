<?php

namespace App\Http\Controllers\Numerology;

use Carbon\Carbon;
use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Services\Numerology\TantricServices;
use App\Http\Requests\Numerology\TantricRequest;

class TantricController extends Controller
{
    /**
     * @var TantricServices
     */
    protected TantricServices $services;

    /**
     * Tantric Construct function
     *
     * @param TantricServices $services
     */
    public function __construct(TantricServices $services)
    {
        $this->services = $services;
    }

    /**
     * Tantric primary function
     *
     * @param \App\Http\Requests\Numerology\TantricRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function tantric(TantricRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $language = $request->query('language', 'it');

            $birthDate = Carbon::createFromFormat('d-m-Y', $data['birthDate'])
                ->format('Y-m-d');

            $result = $this->services->calculateWithMeanings([
                'birth_date' => $birthDate,
            ], $language);

            return static::sendResponse(Message::SHOW_OK, [
                'success' => true,
                'result'  => $result,
            ], 200);

        } catch (\Throwable $e) {

            Log::error('Tantric numerology calculation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return static::sendError(
                Message::GENERIC_KO,
                [
                    'context'   => 'tantric_calculation',
                    'exception' => $e->getMessage(),
                ],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
