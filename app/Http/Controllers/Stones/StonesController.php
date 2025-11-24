<?php

namespace App\Http\Controllers\Stones;

use Carbon\Carbon;
use App\Lib\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Stones\StonesRequest;
use App\Services\Stones\StonesServices;

class StonesController extends Controller
{
    /**
     * Request a Stones Services 
     *
     * @var StonesServices $stones
     */
    protected StonesServices $stones;

    /**
     * Construct function
     *
     * @param StonesServices $stones
     */
    public function __construct(StonesServices $stones)
    {
        $this->stones = $stones;
    }

    /**
     * Daily function
     * - Cosa devi indossare oggi?
     *
     * @param Request $request
     * @param StonesServices $service
     * @return JsonResponse
     */
    public function daily(StonesRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $data['birth_date'] = Carbon::createFromFormat('d-m-Y', $data['birth_date'])
                ->format('Y-m-d');
            $data['reference_date'] = Carbon::createFromFormat('d-m-Y', $data['reference_date'])
                ->format('Y-m-d');

            $language = $data['language'] ?? 'it-IT';

            $result = $this->stones->analyze(
                $data['birth_date'],
                $data['reference_date'],
                $language
            );

            return static::sendResponse(
                Message::SHOW_OK,
                [
                    'success' => true,
                    'result'  => $result,
                ],
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $e) {
            Log::error('Daily stones numerology error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'payload' => $request->all(),
            ]);

            return static::sendError(
                Message::GENERIC_KO,
                [
                    'context'   => 'stones_daily_calculation',
                    'exception' => $e->getMessage(),
                ],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
