<?php

namespace App\Http\Resources;

use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }


}
