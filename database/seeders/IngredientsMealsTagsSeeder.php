<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Meal;
use App\Models\Ingredient;
use App\Models\Tag;


class IngredientsMealsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Looping through meals, tags and ingredients to make inputs
        for ($i=1; $i < 200; $i++) {
            
            $tag_id = Tag::factory()->count(1)->create()->first();
            $ingredient_id = Ingredient::factory()->count(1)->create()->first();
            $meal_id = Meal::factory()->count(1)->create()->first();

            //CREATING DATABASE INPUTS

            // just to show meals with more than 1 ingredient and tag, 
            //if $meal_id->id % 2 == 0 than 2 ingredients and 2 tags are seeded into the table

            if ($meal_id->id % 2 == 0) {
                DB::table('ingredients_meals')->insert([
                    'ingredient_id' => $ingredient_id->id,
                    'meal_id' => $meal_id->id,
                ]); 
        
                DB::table('tags_meals')->insert([
                    'tag_id' => $tag_id->id,
                    'meal_id' => $meal_id->id,
                ]); 

                // make another tag and ingredient so there are no repeating ids in one meal
                
                $tag_id = Tag::factory()->count(5)->create()->random();
                $ingredient_id = Ingredient::factory()->count(5)->create()->random();

                DB::table('ingredients_meals')->insert([
                    'ingredient_id' => $ingredient_id->id,
                    'meal_id' => $meal_id->id,
                ]); 

                DB::table('tags_meals')->insert([
                    'tag_id' => $tag_id->id,
                    'meal_id' => $meal_id->id,
                ]); 

            } else {

                DB::table('ingredients_meals')->insert([
                    'ingredient_id' => $ingredient_id->id,
                    'meal_id' => $meal_id->id,
                ]); 
        
                DB::table('tags_meals')->insert([
                    'tag_id' => $tag_id->id,
                    'meal_id' => $meal_id->id,
                ]); 
            }
                
        }
    }
}
