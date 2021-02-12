<?php 


class Personne {
    
    public IDB $database;

    public function __construct(IDB $db)
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