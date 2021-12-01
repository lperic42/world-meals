@extends('layouts.app')

@section('content')
    <div>
        <h1>create a meal</h1>
    </div>

    <div>
        <form action="" method="post">
        {!! csrf_field() !!}
            <input type="text" name="enName" id="name" placeholder="Meal name">
            <input type="text" name="hrName" id="name" placeholder="Ime jela">
            <input type="text" name="category_id" id="name" placeholder="ID kategorije">
            <input type="text" name="ingredient_id" id="name" placeholder="ID sastojka">
            <input type="text" name="tag_id" id="name" placeholder="ID taga">

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection