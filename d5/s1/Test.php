<?php

require './DB.php';
require './Personne.php';
$db = new DB();
$p = new Personne($db);
$p->connect();
$p->fetch();