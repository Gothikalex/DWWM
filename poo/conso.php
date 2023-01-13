<?php

class Consomme {
    public function calcul($distance,$essence) {
        return $distance / $essence ;
    }
}

$dataVoitures =[
    [50,10],
    [50,0],
    [50,-3],
    [30,5]
];

foreach ($dataVoitures as $v) {
try{
    $conso = new Consomme() ;
    echo "resultat: ".$conso->calcul($v[0],$v[1]); 
}

catch (DivisionByZeroError $e){
    echo "erreur dicvision par zéro.";
}

catch (Exception $e) {
    echo $e->getMessage(); }
    echo "<hr>";
}


?>