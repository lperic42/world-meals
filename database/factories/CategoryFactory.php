<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'en' => ['name' => $this->faker->name(14)],
            'hr' => ['name' => $this->faker->name(14)],
        ];
    }
}
