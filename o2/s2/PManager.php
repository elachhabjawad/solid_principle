<?php

class PManager extends Personne implements IP
{
    
    public  function getSalaire():float
    {
        return $this->salaire * 2;
    }
   
}
