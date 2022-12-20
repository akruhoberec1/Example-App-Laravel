<?php

namespace App\Http\Resources\V1;

use App\Models\TagTranslation;
use App\Http\Resources\V1\TagTranslationResource;
use Illuminate\Http\Resources\Json\JsonResource;


class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return          
        [
            'id' => $this->id,
            'title' => TagTranslationResource::collection($this->title),
            'slug' =>  TagTranslationResource::collection($this->slug)
        ];
    }
}
