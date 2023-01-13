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
    
    $users = [
        ['nom' => 'mathilde' , 'mail' => 'mathilde@gmail.com'],
        ['nom' => 'marine' , 'mail' => 'marine@gmail.com'],
        ['nom' => 'mathias' , 'mail' => 'mathias@gmail.com'],
        ['nom' => 'marius' , 'mail' => 'marius@gmail.com']
    ];
    foreach ($users as $cle =>$valeur) { ?>
    <h1>Utilisateurs <? =$cle ?></h1>    
    <?php
    foreach ($valeur as $c => $v) {
        echo '<p>'.$c.' : '.$v.'</p>' ;
    }
}   
    ?>
    
</body>
</html>