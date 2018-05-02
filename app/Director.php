<?php


namespace App;


class Director
{

    public function getDirectors()
    {
        return app('db')->select("
            select 
            p.pid, CONCAT(p.first_name, ' ', p.last_name) AS name 
            from persons p 
            join role_IN_MOVIES rim on rim.pid = p.pid
            join dictionary d on d.did_id = rim.did
            where d.did_id = '101';
            ");
    }

    public function getDirector($id)
    {
        return app('db')->select("
            select * from persons p
            join role_IN_MOVIES rim on rim.pid = p.pid
            join dictionary d on d.did_id = rim.did
            where d.did_id = '101'
            and p.pid = ?;
            ", [$id]);
    }

    public function createDirector($data)
    {
        $insert = app('db')->insert("
        
            INSERT INTO persons
              (FIRST_NAME, LAST_NAME, COUNTRY, BIRTHDATE)
            VALUES
              (:first_name, :last_name, :country, :birthdate)
        ", [
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'country'    => $data['country'],
            'birthdate'   => $data['birthdate']
        ]);

        $value = app('db')->getPdo()->lastInsertID();

        $insert_did_pid = app('db')->insert("
            INSERT INTO role_in_movies 
              (PID, DID)
            VALUES
              ($value, '101')
        ");

        return $value;
    }


}
