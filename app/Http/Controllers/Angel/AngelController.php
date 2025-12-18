<?php

namespace App\Http\Controllers\Angel;

use Throwable;
use App\Lib\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Angels\AngelsMeaning;
use Illuminate\Http\JsonResponse;

class AngelController extends Controller
{
    /**
     * Get Angels function
     *
     * @param integer|null $number
     * @return JsonResponse
     */
    public function getAngels(?int $number = null): JsonResponse
    {
        try {

            $query = AngelsMeaning::query();

            if ($number) {
                $query->where('number', $number); 
            }

            $angels = $query->get()->toArray();

            return $this->sendResponse(Message::CREATE_OK, [
                'status' => 'success',
                'angels' => $angels,
            ], 201);
        } catch (Throwable $e) {
            return $this->sendError(Message::SHOW_KO, [
                'status' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}
