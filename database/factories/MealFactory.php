<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal>
 */
class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $categories = count(Category::all());

        return [
            'category_id' => $this->faker->numberBetween(0,$categories),
            'deleted_at' => rand(0,5) ? null : now()->addMinutes(10),
        ];
    }
}
