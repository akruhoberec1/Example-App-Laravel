<?php

namespace App\Repositories;
use App\Models\Meal;

class MealRepository{

    public function search($request){
        $data = $request->all();
        $data['per_page'] = !empty($data['per_page']) ? $data['per_page'] : null;
       
        return Meal::checkCategories($data)
        ->checkTags($data)
        ->getDiffTime($data)
        ->checkWith($data)
        ->paginate($data['per_page']);
    }
    
}