<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;


class MealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::factory()->times(10)->create();
    }
}
