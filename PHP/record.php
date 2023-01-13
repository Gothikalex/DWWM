<?php

// print_r($_POST) ;

        $handler =fopen("tableauPOST.txt","a+");

        fwrite($handler, "$_POST[nom]. , $_POST[prenom] , $_POST[age] , $_POST[interest]\n");

        
    
header('location:saisie.php');

?>