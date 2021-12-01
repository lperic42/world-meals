<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Making sure that categories can be both null and in range between 1 and 3 for testing purposes
        $input= [null, 1, 2, 3, 4, 5, 6];
        $rand_keys = array_rand($input);

        return [
            'category_id' => $input[$rand_keys],
            'en' => ['name' => $this->faker->name(10)],
            'hr' => ['name' => $this->faker->name(10)],
        ];
    }
}
