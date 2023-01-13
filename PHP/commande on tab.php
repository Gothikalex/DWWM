<?php

$tab = [2,3,4,5,6] ;
$tab2 =  [12,13,14] ;

array_push($tab,7); //ajoute un élément a la liste
array_pop($tab) ; // supprime dernier elt
array_unshift($tab,0) ; //ajoute un elt au début
array_shift($tab) ; //supprime un elt au début
unset($tab[2]) ;
$liste = array_merge($tab,$tab2) ; 

$annuaire = [
    "john" => "123456789" ,
    "pol" => "987654321" ,
    "jak" => "8646864"
] ;

echo $annuaire ['pol'] ; // tableau associatif on accéde par les clés

print_r(array_keys($annuaire)) ; // renvoi les clés de $annuaire

print_r(array_values($annuaire)) ;

if (array_key_exists('pol', $annuaire)) {
    echo "pol existe et son N° est : " .$annuaire['pol'] ;
} else {
    echo "pol inexistant" ;
}



?>