<?php

class Personne
{
    public int $id;
    public string $full_name;
    public float $salaire;
    public string $st;

    public function __toString(): string
    {
        return '[ id :' . $this->id . ' - fullname :' . $this->full_name . ' - salaire : ' . $this->salaire . '] ';
    }

    public function getSalaire():float
    {
        if ($this->st === "Manager"){
            return $this->salaire * 2 ;
        }else{
            return $this->salaire  ;
        }
    }
}
