<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'num' => $this->num,
            'receiver' => $this->receiver,
            'total_cost' => $this->total_cost,
            'address' => $this->address,
            'created_at' => $this->created_at,
        ];
    }
}
