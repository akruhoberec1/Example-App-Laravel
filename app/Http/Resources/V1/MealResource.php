<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
Use App\Http\Resources\V1\TagResource;


class MealResource extends JsonResource
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
            'title' => $this->translations->title,
            'decription' => $this->translations->description,
            'status' => !empty($request->diff_time) ? $this->checkDiffTime($request->diff_time) : 'created',
            'category' => new CategoryResource($this->whenLoaded('category')),
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'ingredients' => IngredientResource::collection($this->whenLoaded('ingredients')),

        ];
    }


    private function checkDiffTime($diff_time)
    {
        $created = strtotime($this->created_at);
        $modified = strtotime($this->updated_at);
        $deleted = !empty($this->deleted_at) ? strtotime($this->deleted_at) : null;

        $timestamps = compact('created', 'modified', 'deleted');

        uasort($timestamps, [$this, 'compare']);

        $first_key = array_key_first($timestamps);
        $status = 'created';

        if($diff_time < $timestamps[$first_key]){
            $status = $first_key;
        }

        return $status;
    }

    private function compare($a, $b)
    {
        if($a == $b) {
            return 0;
        }
        return ($a > $b) ? -1 : 1;
    }

}