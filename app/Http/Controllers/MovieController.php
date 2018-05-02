<?php

namespace App\Http\Controllers;


use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    protected $model;


    //MovieControler constructor
    public function __construct()
    {
        $this->model = new Movie;
    }

    public function index()
    {
        $movies = $this->model->getMovies();

        return view('movies.index')
            ->with('movies', $movies);
    }

    public function show($id)
    {
        $movie = $this->model->getMovie($id);

        return view('movies.show')
            ->with('movie', $movie);

    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $id =  $this->model->createMovie(
            $request->all()
        );

        return redirect("movie/$id");
    }

}