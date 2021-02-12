<?php

require './IDB.php';
require './DB.php';
require './MYSQL.php';
require './ORACLE.PHP';
require './Personne.php';

$db = new DB();
$mysql = new MYSQL();
$oracle = new ORACLE();
$p = new Personne($oracle);
$p->connect();
$p->fetch();