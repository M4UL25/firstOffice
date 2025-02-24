<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfficeSpaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'duration' => $this->duration,
            'price' => $this->price,
            'tumbnail' => $this->tumbnail,
            'about' => $this->about,
            'city' => new CityResource($this->whenLoaded('city')), // satu
            'photos' => OfficeSpacePhotoResource::collection($this->whenLoaded('photos')), // banyak
            'benefits' => OfficeSpaceBenefitResource::collection($this->whenLoaded('benefits')),
        ];
    }
}
