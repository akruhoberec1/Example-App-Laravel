<?php

namespace Database\Factories;

use App\Models\Meal;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MealTag>
 */
class MealTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $meals = count(Meal::all());
        $tags = count(Tag::all());

        return [
            'meal_id' => $this->faker->numberBetween(1, $meals),
            'tag_id' => $this->faker->numberBetween(1, $tags)
        ];
    }
}
