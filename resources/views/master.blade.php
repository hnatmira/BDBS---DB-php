<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Movie Library')</title>

    <link rel="stylesheet" href="{{ url('css/main.css') }}">

</head>
{{--<body>--}}

    {{--<header>--}}
        {{--<nav>--}}
            {{--<div class="">--}}
                {{--<a href="">--}}
                    {{--<img src="" alt="logo">--}}
                {{--</a>--}}
                {{--<form action="">--}}
                    {{--<input placeholder="Zadejte nazev filmu" type="text">--}}
                {{--</form>--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<a href="">--}}
                            {{--USER--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--</header>--}}
<body>
<form action="{{ url('directors') }}" method="post" class="navigation">
    <a class="home" href="{{ url('') }}">home</a>

    <?php $dir_model = new \App\Director; ?>

    <select name="pid" onchange="this.form.submit()">
        <option value="">All directors</option>
        @foreach( $dir_model->getDirectors() as $director )
            <option value="{{ $director->pid }}"> {{ $director->name }}</option>
        @endforeach
    </select>

    {{--<select name="director_id" onchange="this.form.submit()">--}}
        {{--<option value="">All actors</option>--}}
        {{--@foreach( $dir_model->getDirectors() as $directdirectors
            {{--<option value="{{ $directdirectors}}"> {{ $directdirectors }}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}

    <a href="{{ url('directors/create') }}">new director</a>
    <a href="{{'movie/create'}}">new movie</a>
</form>

@yield( 'content' )


</body>
</html>