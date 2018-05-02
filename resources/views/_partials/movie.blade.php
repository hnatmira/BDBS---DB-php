<tr>

    {{-- MOVIE NAME --}}
    <td>
        <a href="{{ url('movie/' . $movie->mid) }}">
        <strong>{{ $movie->name }}</strong>
        </a>
    </td>

    {{-- DIRECTOR --}}
    <td>
        <a href="{{ url('directors/' . $movie->pid) }}">
            {{ $movie->directors }}
        </a>
    </td>

    {{-- GENRE --}}
    <td>
        <a href="{{url('genre/' . $movie->description)}}">
        {{ $movie->description}}
        </a>
    </td>

    {{-- YEAR --}}
    <td>
        {{ $movie->year}}
    </td>

</tr>
