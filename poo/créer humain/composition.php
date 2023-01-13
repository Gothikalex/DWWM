<?php

class Head 
{
    // attributs
    private $yeux;
    private $couleur; 
    private $bouche;
    private $nez ;

    // méthodes
    public function __construct($y, $c, $b, $n)
    {
        $this->yeux = $y;
        $this->couleur = $c;
        $this->bouche = $b;
        $this->nez = $n;
    }
}

class Tronc
    {
        private $bras ;
        private $epaule ;
        private $dos ;

        public function __construct($bras, $ep, $dos)
        {
            $this->bras = $bras;
            $this->epaule = $ep;
            $this->dos = $dos;
        }
    }   
    
class Legs 
{
    private $cuisse ;
    private $genou ;
    private $tibia ;
    private $pied ;

    public function __construct($cuisse, $genou, $tibia, $pied)
    {
        $this->cuisse = $cuisse;
        $this->genou = $genou;
        $this->tibia = $tibia;
        $this->pied = $pied;
    }   
} 

class Human 
{
    private $head ;
    public function __construct(Head $head, Tronc $tronc, Legs $jambes) 
    {
        $this->head = $head;
        $this->tronc = $tronc;
        $this->jambes = $jambes;
    }
}

$tete = new Head (2,"marrons","cul de poule","peninsulaire");
$tronc = new Tronc (2,"musclées","vouté");
$jambes = new Legs (2,"2 dont 1 pété",2,"en canards");
$bob = new Human($tete, $tronc, $jambes);
var_dump($bob);

?>