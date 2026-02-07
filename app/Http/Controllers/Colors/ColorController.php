<?php

namespace App\Http\Controllers\Colors;

use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Colors\ColorMeaning;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     * Get Colors function
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getColors(Request $request): JsonResponse
    {
        /** ********** START MOD *********** **/
        $lang = $request->get('language', 'it');

        $hasFilters =
            $request->filled('color') ||
            $request->filled('numerology') ||
            $request->filled('chakra');

        /**
         * CASE 1: no filters → return ONLY names
         */
        if (!$hasFilters) {
            $names = ColorMeaning::orderBy('numerology')
                ->get()
                ->map(fn(ColorMeaning $color) => [
                    'name' => $color->name[$lang] ?? null,
                ])
                ->values()
                ->toArray(); // ✅ FIX

            return static::sendResponse(
                Message::SHOW_OK,
                $names,
                JsonResponse::HTTP_OK
            );
        }

        /**
         * CASE 2: filters present → full payload
         */
        $query = ColorMeaning::query();

        if ($request->filled('color')) {
            $query->whereRaw(
                "LOWER(JSON_UNQUOTE(name->'$.$lang')) = ?",
                [mb_strtolower($request->input('color'))]
            );
        }

        if ($request->filled('numerology')) {
            $query->byNumerology((int) $request->input('numerology'));
        }

        if ($request->filled('chakra')) {
            $query->byChakra($request->input('chakra'), $lang);
        }

        $colors = $query
            ->orderBy('numerology')
            ->get();

        if ($colors->isEmpty()) {
            return static::sendError(
                Message::NOT_FOUND,
                [
                    'filters' => $request->only(['color', 'numerology', 'chakra', 'lang']),
                ],
                JsonResponse::HTTP_NOT_FOUND
            );
        }

        return static::sendResponse(
            Message::SHOW_OK,
            $colors
                ->map(fn(ColorMeaning $color) => $this->translateColors($color, $lang))
                ->values()
                ->toArray(),
            JsonResponse::HTTP_OK
        );
        /** ********** ENDMOD *********** **/
    }

    /**
     * Translate Colors function
     *
     * @param ColorMeaning $color
     * @param string $lang
     * @return array
     */
    protected function translateColors(ColorMeaning $color, string $lang): array
    {
        return [
            'id'         => $color->id,
            'name'       => $color->name[$lang] ?? null,
            'hex'        => $color->hex,
            'psychology' => $color->psychology[$lang] ?? null,
            'shadow'     => $color->shadow[$lang] ?? null,
            'spiritual'  => $color->spiritual[$lang] ?? null,
            'chakra'     => $color->chakra[$lang] ?? null,
            'numerology' => $color->numerology,
            'organs'     => $color->organs[$lang] ?? null,
            'licnomancy' => $color->licnomancy[$lang] ?? null,
            // 'created_at' => $color->created_at,
            // 'updated_at' => $color->updated_at,
        ];
    }
}
