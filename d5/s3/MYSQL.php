<?php

class MYSQL implements IDB
{

    public function connect():void
    {
        echo "connect to database mysql <br />";
    }

    public function fetch():void
    {
        echo "fetching database mysql <br />";
    }


}
