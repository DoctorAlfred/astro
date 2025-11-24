<?php

namespace App\Http\Controllers\Numerology;

use Carbon\Carbon;
use App\Lib\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Services\Numerology\PythagoreanServices;
use App\Http\Requests\Numerology\PythagoricRequest;

class PythagoricController extends Controller
{
    /**
     * Undocumented variable
     *
     * @var PythagoreanService
     */
    protected PythagoreanServices $services;

    /**
     * Pythagoric Construct function
     *
     * @param PythagoreanService $service
     */
    public function __construct(PythagoreanServices $services)
    {
        $this->services = $services;
    }

    /**
     * Pythagoric primary function
     *
     * @param \App\Http\Requests\Numerology\PythagoricRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function pythagoric(PythagoricRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $data['birth_date'] = Carbon::createFromFormat('d-m-Y', $data['birth_date'])
                ->format('Y-m-d');

            $result = $this->services->calculateWithMeanings([
                'first_name' => $data['first_name'],
                'last_name'  => $data['last_name'],
                'birth_date' => $data['birth_date'],
            ], 'it-IT');

            return static::sendResponse(Message::SHOW_OK, [
                'success' => true,
                // 'input'   => $data,
                'result'  => $result,
            ], 200);
        } catch (\Throwable $e) {
            Log::error('Pythagoric calculation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return static::sendError(
                Message::GENERIC_KO,
                [
                    'context'   => 'pythagoric_calculation',
                    'exception' => $e->getMessage(),
                ],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
