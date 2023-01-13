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
      require_once 'fonctions.php' ;  
      $tab1 = [23,55,66] ;
      $prenoms = array("pierre","pol","jak") ;

      debug($tab1) ;
      debug($prenoms);

      echo $prenoms[0]."<hr>" ;

      $taille = count($prenoms) ; // count => calcul longueur d'un tableau

      //parcours de tableau

      for ($i=0 ; $i < $taille ; $i++) {
        echo $prenoms[$i]."<br>" ;
      }
      echo"<hr>" ;
      foreach ($prenoms as $p) {
        echo $p."<br>" ;
      }
    ?>
    
</body>
</html>