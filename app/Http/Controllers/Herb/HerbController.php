<?php

namespace App\Http\Controllers\Herb;

use App\Lib\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Herbs\HerbsRequest;
use App\Models\Herbs\HerbsMeaning;

class HerbController extends Controller
{
    public function getHerbs(HerbsRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $language      = $data['language']      ?? null;
            $plantName     = isset($data['plantName']) ? $data['plantName'] : null;
            $type          = $data['type']          ?? null;
            $evidenceLevel = $data['evidenceLevel'] ?? null;
            $sourceType    = $data['sourceType']    ?? null;

            // CASE 1: lista piante
            if (!$plantName) {
                return static::sendResponse(
                    Message::SHOW_OK,
                    HerbsMeaning::query()
                        ->select([
                            'id',
                            'name',
                            'latin_name',
                            'family',
                            'genus',
                            'species',
                            'edible',
                            'toxic',
                            'slug',
                        ])
                        ->orderBy('name')
                        ->get()
                        ->toArray(),
                    JsonResponse::HTTP_OK
                );
            }

            // CASE 2: singola pianta + contents
            $herb = HerbsMeaning::query()
                ->where(function ($q) use ($plantName) {
                    $q->where('name', $plantName)
                      ->orWhere('slug', $plantName);
                })
                ->with([
                    'herbscontents' => function ($query) use (
                        $language,
                        $type,
                        $evidenceLevel,
                        $sourceType
                    ) {

                        if ($language !== null) {
                            $query->where('language', $language);
                        }

                        if ($type !== null) {
                            $query->where('type', $type);
                        }

                        if ($evidenceLevel !== null) {
                            $query->where('evidence_level', $evidenceLevel);
                        }

                        if ($sourceType !== null) {
                            $query->where('source_type', $sourceType);
                        }

                        $query->orderBy('type');
                    },
                ])
                ->first();

            if (!$herb) {
                return static::sendError(
                    Message::NOT_FOUND,
                    ['plantName' => $plantName],
                    JsonResponse::HTTP_NOT_FOUND
                );
            }

            return static::sendResponse(
                Message::SHOW_OK,
                [
                    'id'        => $herb->id,
                    'name'      => $herb->name,
                    'latinName' => $herb->latin_name,
                    'family'    => $herb->family,
                    'genus'     => $herb->genus,
                    'species'   => $herb->species,
                    'edible'    => $herb->edible,
                    'toxic'     => $herb->toxic,
                    'slug'      => $herb->slug,
                    'contents'  => $herb->herbscontents->map(function ($content) {
                        return [
                            'type'            => $content->type,
                            'title'           => $content->title,
                            'content'         => $content->content,
                            'sourceType'      => $content->source_type,
                            'evidenceLevel'   => $content->evidence_level,
                            'sourceReference' => $content->source_reference,
                        ];
                    })->values(),
                ],
                JsonResponse::HTTP_OK
            );

            /** ********** ENDMOD *********** **/

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
