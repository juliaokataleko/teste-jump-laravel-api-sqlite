<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "vehiclePlate" => $this->vehiclePlate,
            "entryDateTime" => $this->entryDateTime,
            "exitDateTime" => $this->exitDateTime,
            "priceType" => $this->priceType,
            "price" => $this->price,
            "userId" => $this->userId,
            "userName" => $this->user->name,
            "createdAt" => $this->created_at,
        ];
    }
}
