<?php

class PTS extends Personne implements IP
{
    
    public  function getSalaire():float
    {
        return $this->salaire;
    }
   
}
