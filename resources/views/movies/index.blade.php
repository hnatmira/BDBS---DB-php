@extends('master')
@section('title', 'all movies')



@section('content')

    <h1>All Movies</h1>


<!--    --><?php //echo '<pre>';
//    print_r( collect($movies));
//    echo '</pre>'; ?>

    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Director</th>
            <th>Genre</th>
            <th>Year</th>
        </tr>
        </thead>
        <tbody>
            @each( '_partials.movie', $movies, 'movie' )
        </tbody>
        <tfoot>
            <tr>

            </tr>
        </tfoot>
    </table>




@endsection
