@extends('master')
@section('title', $movie->NAME)



@section('content')

    <h1>{{ $movie->NAME  }}</h1>

<!--    --><?php //echo '<pre>';
//        print_r( $movie );
//        echo '</pre>'; ?>



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
        <tr>
            <td>{{ $movie->NAME }}</td>
            <td>{{ $movie->FIRST_NAME }} {{ $movie->LAST_NAME }}</td>
            <td>{{ $movie->DESCRIPTION}}</td>
            <td>{{ $movie->YEAR}}</td>
        </tr>
        </tbody>
        <tfoot>
            <tr class="summary">
                <td colspan="5"> {{--natazeni textu pres x sloupcu--}}
                    {{ $movie->SUMMARY }}
                </td>
            </tr>
        </tfoot>
    </table>



@endsection
