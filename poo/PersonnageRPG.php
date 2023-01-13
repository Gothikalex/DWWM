<?php

abstract class Personnage{

    private $nom;

    public function getNom(){
        return $this->nom;
    }

    public function setNom($n){
        $this->nom = $n;
        return $this;
    }

    abstract public function combattre(); 
}

class Nain extends Personnage{
    public function combattre(){
        echo"Je suis un Nain et j'aime pas ceux de la surface<br/>";
    }
}

class Barbare extends Personnage{
    public function combattre(){
        echo"Pan dans ta gueule<br/>";
    }
}

class Archer extends Personnage{
    public function combattre(){
        echo"Je suis un archer, ayez confiance, posez cette pomme sur votre tête<br/>";
    }
}

class Mage extends Personnage {
    public function combattre(){
        echo "Je suis un mage et je lance des sorts<br/>";
    }
}

$perso = [new Nain("Gurdil"), new Barbare("Crom"), new Archer("AIM"), new Mage("Sorcier")];
print_r($perso);
    
foreach($perso as $p){
    $p->combattre();
}


?>