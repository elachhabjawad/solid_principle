<?php 

require './Personne.php';
require './PManager.php';
require './PTS.php';

$pm = new PManager();
$pm->id = 1;
$pm->full_name='Jawad';
$pm->salaire = 500;

echo $pm.' <br />';
echo $pm->getSalaire().' <br />';


$pts = new PTS();
$pts->id = 2;
$pts->full_name='EL ACHHAB';
$pts->salaire = 500;


echo $pts.' <br />';
echo $pts->getSalaire().' <br />';



