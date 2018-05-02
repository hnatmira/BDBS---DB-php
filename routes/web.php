<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


// movies
$router->get('/', 'MovieController@index');
$router->get('/movie/create', 'MovieController@create');
$router->get('/movie/{id}', 'MovieController@show');

$router->post('/movies', 'MovieController@store');

//directors
$router->get('/directors', 'DirectorController@index');
$router->get('/directors/create', 'DirectorController@create');
$router->get('/directors/{id}', 'DirectorController@show');


$router->post('/directors/choose', 'DirectorController@choose');
$router->post('/directors', 'DirectorController@store');




// smeti
$router->get('/edit/{id}', function ($id) use ($router) {

    $movie =  app('db')->selectOne("
    
    select * from persons p 
    join role_IN_MOVIES rim on rim.pid = p.pid
    join movies m on m.mid = rim.mid
    join genre g on g.id_movies = m.mid
    join dictionary d on d.did_fk = g.id_genre
    where rim.mid = ?
    and rim.did = '101'
    ", [$id]);

    return view('movies.editMovie', [

        'movie' => $movie

    ]);

});

$router->get('/work', function () use ($router) {

    $work = app('db')->select("
    select * from persons p 
    join role_IN_MOVIES rim on rim.pid = p.pid
    join movies m on m.mid = rim.mid
    join genre g on g.id_movies = m.mid
    join dictionary d on d.did_fk = g.id_genre");

    return $work;


});
