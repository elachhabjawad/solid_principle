<?php 

interface IDB{

    public function connect():void;
    public function fetch():void;
}