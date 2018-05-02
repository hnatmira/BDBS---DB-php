<?php


namespace App;


class Movie
{

    public function getMovies()
    {
        return app('db')->select(" 
            SELECT m.mid, m.name, 
                CONCAT(p.first_name, ' ', p.last_name) AS directors, p.pid,
                d.description,
                m.year
            FROM movies m 
            LEFT JOIN role_in_movies rim ON rim.mid = m.mid
            LEFT JOIN persons p ON p.pid = rim.PID
            LEFT JOIN genre g ON g.id_movies = m.mid
            LEFT JOIN dictionary d ON d.did_id = g.id_genre
            WHERE rim.did = '101'
         ");
    }

    public function getMovie($id)
    {
        return app('db')->selectOne("
            SELECT * FROM movies m 
            LEFT JOIN role_in_movies rim ON rim.mid = m.mid
            LEFT JOIN persons p ON p.pid = rim.PID
            LEFT JOIN genre g ON g.id_movies = m.mid
            LEFT JOIN dictionary d ON d.did_id = g.id_genre
            WHERE m.mid = ?
            AND rim.did = 101;
            ", [$id]);
    }

    /**
     * Store new movie in DB
     * @param $data
     * @return mixed
     */
    public function createMovie($data)
    {
        $insert_movies = app('db')->insert("
        
            INSERT INTO movies
              (NAME, YEAR, SUMMARY)
            VALUES
              (:name, :year, :summary)
        ", [
            'name' => $data['name'],
            'year' => (int)$data['year'],
            'summary' => $data['summary']
        ]);




        return app('db')->getPdo()->lastInsertID();
    }


}
