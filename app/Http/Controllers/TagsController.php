<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\TagsRequest;


class TagsController extends Controller
{
    public function create()
    {
        return view('tags.create');
    }

    public function store(TagsRequest $request) 
    {
        $tag = new Tag();
   
        $tag->translateOrNew('en')->name = $request->enName;
        $tag->translateOrNew('hr')->name = $request->hrName;
        $tag->save();
    }
}
