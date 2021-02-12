<?php 

interface IProduit{
    public function addProduit(): void;
    public function editProduit(): void;
    public function addCmd():void;
    public function deleteCmd():void;
}