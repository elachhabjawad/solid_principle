<?php 

require './Personne.php';

$p1 = new Personne();
$p1->id = 1;
$p1->full_name='Jawad';
$p1->salaire = 500;
$p1->st ='Manager';

echo $p1.' <br />';
echo $p1->getSalaire().' <br />';


$p1 = new Personne();
$p1->id = 2;
$p1->full_name='EL ACHHAB';
$p1->salaire = 500;
$p1->st ='ts';

echo $p1.' <br />';
echo $p1->getSalaire().' <br />';



