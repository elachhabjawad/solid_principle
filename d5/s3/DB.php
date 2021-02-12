<?php

class DB implements IDB
{

    public function connect():void
    {
        echo "connect to database <br />";
    }

    public function fetch():void
    {
        echo "fetching database <br />";
    }


}
