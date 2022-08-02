<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Apod extends JsonResource
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
          'name' => $this->resource['copyright'],
          'url' => $this->resource['url'],
          'date' => $this->resource['date']
      ];
    }
}
