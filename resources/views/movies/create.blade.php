@extends('master')
@section('title', 'New Movie')



@section('content')
    <form action="{{ url('movies') }}" method="post">

        <h1>New Movie</h1>

        <p>
            <input type="text" name="name" placeholder="Name">
        </p>
        <p>
            <input type="number" name="director" placeholder="Director">
        </p>
        <p>
            <input type="text" name="genre" placeholder="Genre">
        </p>
        <p>
            <input type="date" name="year" placeholder="Year">
        </p>
        <p>
            <textarea type="text" name="summary" placeholder="About this movie"></textarea>
        </p>

        <p class="submit">
            <input type="submit" value="add new director">
            <a href="{{ url() }}">back</a>
        </p>

    </form>

@endsection