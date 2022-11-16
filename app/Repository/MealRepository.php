<?php

namespace App\Repository;

use App\Models\Meal;
use App\Repository\IMealRepository;

class MealRepository implements IMealRepository
{

    protected $meal = null;

    public function getAllMeals()
    {
        return Meal::all();
    }

}