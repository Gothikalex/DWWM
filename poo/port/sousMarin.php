<?php
require_once "Bateau.php";
class SousMarin extends Bateau implements Amarable {
    
    public function nbCordes() {
    // pour rendre Amarable ce bateau il faudra nbCordes
    // definies ainsi
    return ($this->masse) / 5 ;
    }
    public function fondNecessaire() {
        return 12 ;
    }
}

?>