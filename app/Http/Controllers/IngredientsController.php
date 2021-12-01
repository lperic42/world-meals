<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Http\Requests\IngredientsRequest;


class IngredientsController extends Controller
{
    public function create()
    {
        return view('ingredients.create');
    }

    public function store(IngredientsRequest $request) 
    {
        $ingredient = new Ingredient();
   
        $ingredient->translateOrNew('en')->name = $request->enName;
        $ingredient->translateOrNew('hr')->name = $request->hrName;
        $ingredient->save();
    }
}
