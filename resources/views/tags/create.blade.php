@extends('layouts.app')

@section('content')
    <div>
        <h1>create a tag</h1>
    </div>

    <div>
        <form action="" method="post">
        {!! csrf_field() !!}
            <input type="text" name="enName" id="name" placeholder="Tag name">
            <input type="text" name="hrName" id="name" placeholder="Ime taga">
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection