<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalListResource extends JsonResource
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
            "name" => $this->name,
            "treatments" => $this->treatments->pluck("name"),
            "owner_first_name" => $this->owner->first_name,
            "owner_last_name" => $this->owner->last_name,
            "owner_id" => $this->owner->id,    
          ];
    }
}
