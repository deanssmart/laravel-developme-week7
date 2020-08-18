<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "address_1" => $this->address_1,
            "address_2" => $this->address_2,
            "town" => $this->town,
            "postcode" => $this->postcode,
            "animals" => collect($this->animals)->pluck('name'),
        ];
    }
}
