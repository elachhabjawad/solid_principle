<?php

require './DB.php';
require './Personne.php';
$db = new DB();
$p = new Personne();
$p->setDataBase($db);
$p->connect();
$p->fetch();