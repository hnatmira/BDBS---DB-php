@extends('master')
@section('title', '')



@section('content')

    {{--<form action="">--}}
        {{--<table>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>--}}

            {{--</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
            {{--<tbody>--}}
            {{--<tr>--}}
                {{--@foreach( $movies as $movie )--}}
                    {{--<td>--}}
                    {{--<a href="{{ url('movie/' . $movie->MID) }}">--}}
                        {{--{{ $movie->NAME }}--}}
                    {{--</a>--}}
                    {{--</td>--}}
                {{--@endforeach--}}
            {{--</tr>--}}
            {{--</tbody>--}}
        {{--</table>--}}

    {{--</form>--}}

    <h2>{{ $movie ->NAME  }}</h2>
    <p>
        {{ $movie->SUMMARY }}

    </p>
    <form action="">
    <input value="{{ $movie->NAME }}" type="text">
    <input value="{{ $movie->FIRST_NAME}} {{ $movie->LAST_NAME}}" type="text">
    <input value="{{ $movie->DESCRIPTION}}" type="text">
    </form>

@endsection
