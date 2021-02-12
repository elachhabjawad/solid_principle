<?php 


class Personne {
    
    public DB $database;

    public function __construct(DB $db)
    {
        $this->database = $db;
    }
   
    public function connect():void
    {
        $this->database->connect();
    }

    public function fetch():void
    {
        $this->database->fetch();
    }

}