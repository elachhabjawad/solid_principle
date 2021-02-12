<?php

class PManager extends Personne
{
    
    public  function getSalaire():float
    {
        return $this->salaire * 2;
    }
   
}
