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
        if (file_exists('fichier bidon.txt')){
            if (is_file("texte.txt")) {
                $handler =fopen("fichier bidon.txt", "a+") ;
                // echo fread($handler, 1024) ;
                // echo fgets($handler, 1024) ;
                // echo "<br>" ;
                // echo fgets($handler,1024) ;
                // while (!feof($handler)) {
                //     echo fgets($handler,1024) ;
                //     echo "<br>";
                // }
                fwrite($handler, "un texte supplémentaire ");    
            
                fclose($handler);
            }
        }            
    ?>
</body>
</html>