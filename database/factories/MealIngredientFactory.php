<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\Ingredient;
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
        $meals = count(Meal::all());
        $ingredients = count(Ingredient::all());

        return [
            'meal_id' => $this->faker->numberBetween(1, $meals),
            'ingredient_id' => $this->faker->numberBetween(1, $ingredients)
        ];
    }
}
