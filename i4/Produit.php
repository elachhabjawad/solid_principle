<?php

class Produit implements IProduit
{

    public function addProduit(): void
    {
        echo 'addProduit <br />';
    }
    public function editProduit(): void
    {
        echo 'editProduit <br />';
    }
    public function addCmd(): void
    {
        echo 'addCmd <br />';
    }
    public function deleteCmd(): void
    {
        echo 'deleteCmd <br />';
    }
}
