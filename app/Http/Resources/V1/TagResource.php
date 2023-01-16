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
        $translation = $this->translations->where('tag_id', $this->id)->first();
            
        return 
            [
                'id' => $this->id,
                'title' => $translation->title,
                'slug' => $translation->slug,
            ];
    }
}
