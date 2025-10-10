<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Numerology\NumerologyServices;

class NumerologyController extends Controller
{
    /** @var \App\Services\Numberlogy\NumerologyServices $numerologyService */
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
     * POST /api/numerology/nai-from-date
     * Body: { "birth_date": "1990-10-27" }
     */
    public function naiFromDate(Request $request)
    {
        $request->validate([
            'birthDate' => 'required|date_format:d-m-Y',
        ]);

        $nai = $this->numerologyServices->calculateNAIFromDate(
            $request->input('birthDate')
        );

        return response()->json([
            'status' => 'success',
            'nai'    => $nai,
        ]);
    }

    /**
     * POST /api/numerology/nai-from-name
     * Body: { "first_name": "Mario", "last_name": "Rossi" }
     */
    public function naiFromName(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:100',
            'lastName'  => 'required|string|max:100',
        ]);

        $nai = $this->numerologyServices->calculateNAIFromName(
            $request->input('firstName'),
            $request->input('lastName')
        );

        return response()->json([
            'status' => 'success',
            'nai'    => $nai,
        ]);
    }

    public function naiMatrix(Request $request)
    {
        $request->validate([
            'birthDate' => 'required|date_format:Y-m-d',
            'firstName' => 'required|string|max:100',
            'lastName'  => 'required|string|max:100',
        ]);

        $matrix = $this->numerologyServices->calculateNAIMatrix(
            $request->input('birthDate'),
            $request->input('firstName'),
            $request->input('lastName')
        );

        return response()->json([
            'status' => 'success',
            'matrix' => $matrix,
        ]);
    }
}
