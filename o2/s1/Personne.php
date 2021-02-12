<?php

abstract class Personne
{
    public int $id;
    public string $full_name;
    public float $salaire;

    public function __toString(): string
    {
        return '[ id :' . $this->id . ' - fullname :' . $this->full_name . ' - salaire : ' . $this->salaire . '] ';
    }

    public abstract function getSalaire():float;
   
}
