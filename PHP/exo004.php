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

        // fonctions
        // function bonjour($prenom,$age=0) {
        //     echo "bonjour ".$prenom. " j'ai " .$age. " an(s) <br>" ;
        // }

        // bonjour("pierre",6) ;
        // bonjour("pol",5) ;
        // bonjour("jak") ;

        function bonjour(...$prenom) {
            foreach ($prenom as $p) {
            echo "bonjour ".$p. "<br>" ;
            }
        }

        bonjour("pierre","pol","jak","pauline") ;
        
    ?>
    
</body>
</html>