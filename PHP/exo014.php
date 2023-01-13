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
        //supprimer un fichier
        if (unlink("fichier bidon.txt")) {
            echo "fichier bidon.txt a été supprimé!" ;

        }   else {
            echo "fichier bidon.txt n'a pas été supprimé!";
            }
    ?>
</body>
</html>