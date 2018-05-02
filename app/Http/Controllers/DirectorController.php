<?php

namespace App\Http\Controllers;


use App\Director;
use http\Env\Request;


class DirectorController extends Controller
{
    protected $model;

    /**
     * DirectorController constructor.
     */
    public function __construct()
    {
        $this->model = new Director;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->model->getDirectors();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->model->getDirector($id);
    }


    /**
     * NEW DIRECTOR FORM
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     *  Redirect to directors page on select
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function choose(\Illuminate\Http\Request $request)
    {
        $id =  $request->input('pid');
        return redirect("directors/$id");
    }

    /**
     * STORE NEW DIRECTOR IN DB
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $id =  $this->model->createDirector(
            $request->all()
        );

        return redirect("directors/$id");
    }

}