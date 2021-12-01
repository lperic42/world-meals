<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoriesRequest;



class CategoriesController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoriesRequest $request) 
    {
        $category = new Category();
   
        $category->translateOrNew('en')->name = $request->enName;
        $category->translateOrNew('hr')->name = $request->hrName;
        $category->save();
    }
}
