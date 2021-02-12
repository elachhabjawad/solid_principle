<?php

class ORACLE implements IDB
{

    public function connect():void
    {
        echo "connect to database oracle <br />";
    }

    public function fetch():void
    {
        echo "fetching database oracle <br />";
    }


}
