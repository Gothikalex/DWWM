<?php
require_once "Bateau.php";
class Voilier extends Bateau implements Amarable {
    
    public function nbCordes() {
    // pour rendre Amarable ce voilier il faudra nbCordes
    // definies ainsi
    return ($this->masse) / 10 ;
    }
    public function fondNecessaire() {
        return 6 ;
    }
}
?>