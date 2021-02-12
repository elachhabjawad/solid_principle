<?php

require './DB.php';
require './Personne.php';
$p = new Personne();
$p->connect();
$p->fetch();