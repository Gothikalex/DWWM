<?php

// Attributs
class Port {
    public $port;
    
    // méthodes
    public function __construct($p) {
        $this->port = $p;
    echo "ici c'est le port de ".$p."!!!<br/>" ;
    }
    public function getPort() { 
        return $this->port;
    }

    public function accueilEngin(Amarable $a) {
        if ( $a->fondNecessaire() > 10) {
            echo "pas assez de fond<br>";
        } else {
        echo "<h3>ok, il faut que j'emmene " . $a->nbcordes() . " cordes d'amarages.</h3>"; }
    }
}

?>