<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
          'title' => $this->title,
          'price' => $this->price,
          'membership_fee' => $this->membership_fee,
          'relatives' => $this->relatives,
          'seniors' => $this->seniors,
          'detail' => $this->detail
        ];
    }
}
