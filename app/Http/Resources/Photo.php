<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Photo extends JsonResource
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
          'name' => $this->resource['camera']['full_name'],
          'id' => $this->resource['id'],
          'url' => $this->resource['img_src'],
          'date' => $this->resource['earth_date']
      ];
    }
}
