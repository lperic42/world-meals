<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'en' => ['name' => $this->faker->name(12)],
            'hr' => ['name' => $this->faker->name(12)],
        ];
    }
}
