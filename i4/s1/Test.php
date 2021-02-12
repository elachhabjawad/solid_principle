<?php 

require './IProduit.php';
require './ICmd.php';
require './Produit.php';
require './Cmd.php';

$p = new Produit();
$p->addProduit();


$cmd = new Cmd();
$cmd->deleteCmd();