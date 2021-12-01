@extends('layouts.app')

@section('content')
    <div class="headerWrap" style="background-color:#d3d3d3; display:flex; align-items: center;">
        <div class="header" style="height:50px; width:80%; margin:0 auto; display:flex; align-items:center; justify-content:space-around; color:white; font-variant:all-small-caps;">
            <a href="{{ route('createMeal') }}">new meal</a>
            <a href="{{ route('createIngredient') }}">new ingredient</a>
            <a href="">new tag</a>
            <a href="">new category</a>

        </div>
        <div style="padding-right: 50px;">
            <a href="/api/lang/en">En</a>
            <a href="/api/lang/hr">Hr</a>
        </div>
    </div>
    <div>
        <div>
            @foreach($meals as $meal)
            <p>{{ $meal->translate($locale ?? '')->name; }}</p>
            @endforeach
        </div>
    </div>
@endsection