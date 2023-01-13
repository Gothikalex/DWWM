<?php

class Employe extends Personnage 
{
    private $emploi;
    private $salaire;
    // cette clase hérite des attributs et méthode de la classe Personnage
    //et on peut en rajouter

    public function setEmploi($emp) 
    {
        $this->emploi = $emp;
        return $this;
    }

    public function setSalaire($montant) 
    {
        $this->salaire = $montant;
        return $this;
    }

    public function getEmploi() 
    {
        return $this->emploi;
    }

    public function getSalaire() 
    {
        return $this->salaire;
    }
}

?>