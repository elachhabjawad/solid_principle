<?php 


class Personne {
    
    public DB $database;

    public function __construct()
    {
        $this->database = new DB();  
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