@extends('layouts.app')

@section('content')
    <div>
        <h1>create an ingredient</h1>
    </div>

    <div>
        <form action="" method="post">
        {!! csrf_field() !!}
            <input type="text" name="enName" id="name" placeholder="Ingredient name">
            <input type="text" name="hrName" id="name" placeholder="Ime sastojka">
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection