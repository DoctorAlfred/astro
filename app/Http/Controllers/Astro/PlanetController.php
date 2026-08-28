<?php

namespace App\Http\Controllers\Astro;

use Exception;
use App\Lib\Message;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Astrology\PlanetMeaning;


class PlanetController extends Controller
{
    /**
     * Get Planets function
     *
     * @param string|null $name
     * @param string|null $lang
     * @return \Illuminate\Http\JsonResponse
     */
    public function planets(?string $name = null, ?string $lang = 'it'): JsonResponse
    {
        try {
            $result = self::getPlanets($name, $lang);

            return $this->sendResponse(Message::SHOW_OK, $result);
        } catch (Exception $e) {
            return $this->sendError(Message::SHOW_KO, ['error' => $e]);
        }
    }

    /**
     * Get Planets static function
     *
     * @param string|null $name
     * @param string|null $lang
     * @return array
     */
    public static function getPlanets(?string $name = null, ?string $lang = 'it'): array
    {
        $query = PlanetMeaning::query();

        if ($name) {
            $name = ucfirst(strtolower($name));
            $query->whereRaw('JSON_SEARCH(name, "one", ?) IS NOT NULL', [$name]);
        }

        $planets = $query->get();

        return $planets->map(function ($planet) use ($lang) {
            $planet->forcedLocale = $lang;
            return $planet->toArray();
        })->toArray();
    }
}
