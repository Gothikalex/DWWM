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

       //fonctions
       // ici le type renvoyé doit être INT (depuis la version 7 de PHP)
       function addition(int $a, int $b) : int {
       return $a + $b  ;
       }
        
       $res = addition(3,5) ;
       
        echo $res ;

        echo addition(684,894) ;
    ?>
    
</body>
</html>