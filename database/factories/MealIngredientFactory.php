<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MealIngredient>
 */
class MealIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rangemeal = range(1,8);
        $rangeing  = range(1,80);
        return [
            'meal_id' => random_int(1,8),
            'ingredient_id' => random_int(1,80)
        ];
    }
}
