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

    echo "<p>Document</p>" ;


    ?>

    <h1>Document</h1>

    <?php
    // en php une variable est toujours préfixée par $
    $unechaine = "lorem ipsum pijazoi" ;
    echo "<p>".$unechaine."</p>" ;

    $x =1 ;
    $y =4 ;
    $z = $x+$y ;
    echo "<p>".$x. "+" .$y. "=".$z."</p>" ;
    // ++ ; += ; -- ; -= ; *= ; /= ; %=

    // $w = $y++ ;
    // echo "<p>".$y++."</P>" ;

    if ($y > 2) {
        echo "y est supperieur à 2" ;
    }
    else if (y < 2) {
        echo "y est inferrieur à 2" ;
    }
    else { 
        echo "x egal 2" ;
    }
    $cvrai = true ;
    if ($cvrai) {
        echo "<p>true</p>" ;
    }

    if ( ($y > 2) && ( $x ==1)) { echo "vrai" ;}

    // && (AND) renvoie true si toutes les compraisons sont vraies
    ?>
    
    <br>

    <?php
    if ( ($y > 2) || ( $x ==1)) { echo "vrai" ;}

    // || (OR) renvoie true si une des compraisons est vrai
    
    if 
    ?>
    
</body>
</html>