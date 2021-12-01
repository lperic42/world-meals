<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\MealTranslation;
use App\Http\Requests\MealsRequest;


class MealsController extends Controller
{
    public function create()
    {
        return view('meals.create');
    }

    public function store(MealsRequest $request) 
    {
        $meal = new Meal();
   
        $meal->translateOrNew('en')->name = $request->enName;
        $meal->translateOrNew('hr')->name = $request->hrName;
        $meal->category_id = $request->category_id;
        $meal->save();

        // testing
        
        $ingredient_id = $request->ingredient_id;
        $meal->ingredients()->attach($ingredient_id);

        $tag_id = $request->tag_id;
        $meal->tags()->attach($tag_id);
    }
}
