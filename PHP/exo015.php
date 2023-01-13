<?php
require 'fonctions.php';
$prenom ="polo";
$nom = "lacoste" ;
$age = 23 ;

// les variables globales sont toutes dans un tableau spécifique à PHP => $GLOBALS

function presente(){
    // pour utilise les variabless globales dans ma fonction les déclarer avec
    // l'opérateur global
    global $nom,$prenom,$age;
    echo"je suis ".$prenom." ".$nom. " et j'ai ".$age." ans" ;
}

function presente2(){
    echo "je suis " .$GLOBALS['prenom'] ;
}


debug($_SERVER) ;

?>