<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'city_birth' => $this->city_birth,
            'date_birth' => $this->date_birth,
            'hour_birth' => $this->hour_birth,
            'from' => $this->from,
            'language' => $this->language,
            'role' => $this->role,
            'permission' => $this->permission,
            'angel' => $this->whenLoaded('angel', function() {
                return [
                    'name' => $this->angel->kabal_name,
                    'trigram' => $this->angel->trigram_significate,
                    'choir' => $this->angel->choir,
                    'archangel' => $this->angel->archangel,
                    'element' => $this->angel->element,
                    'psalm' => $this->angel->psalm,
                    'psalmVerse' => $this->angel->psalm_verse,
                ];
            }),
            'subscription' => $this->whenLoaded('activeSubscription', function() {
                return [
                    'slug' => $this->activeSubscription->plan->slug ?? null,
                    'expires_at' => $this->activeSubscription->expires_at,
                    'isActive' => $this->activeSubscription->is_active
                ];
            }),
        ];
    }
}
