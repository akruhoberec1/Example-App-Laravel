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
        $translation = $this->translations->where('meal_id', $this->id)->first();
        $category_translation = $this->category->translations->where('category_id', $this->category->id)->first();


        return [
            'id' => $this->id,
            'title' => $translation->title,
            'decription' => $translation->description,
            'status' => !empty($request->diff_time) ? $this->checkDiffTime($request->diff_time) : 'created',
            'category' => [
                'id' => $this->category->id,
                'title' => $category_translation->title,
                'slug' => $category_translation->slug,
            ],
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