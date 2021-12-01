@extends('layouts.app')

@section('content')
    <div>
        <h1>create a category</h1>
    </div>

    <div>
        <form action="" method="post">
        {!! csrf_field() !!}
            <input type="text" name="enName" id="name" placeholder="Category name">
            <input type="text" name="hrName" id="name" placeholder="Ime kategorije">

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection