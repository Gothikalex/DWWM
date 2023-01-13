<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require 'fonctions.php' ;
    $ageetudiants = ["Mathilde" => 27 , "Pol" => 26 , "Amandine" => 24] ;
    // debug($etudiants) ;
    $mailsetudiants ["Mathilde"] = "mathilde@gmail.com" ;
    $mailsetudiants ["Pol"] = "pol@gmail.com" ;
    $mailsetudiants ["Amandine"] = "amandine@gmail.com" ;
    // debug($mailsetudiants) ;

    foreach($mailsetudiants as $cle => $valeur ) { ?>
        <h1> <?= $cle; ?> </h1>
        <p><?  $valeur; ?></p>
        
        <hr>
         } ?>
    
</body>
</html>