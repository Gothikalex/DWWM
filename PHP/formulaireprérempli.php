<?php
require "connect.php" ;

$sql = $pdo -> prepare("SELECT * FROM user WHERE id = 1 ");
$sql -> execute() ;
$rows = $sql -> fetch() ; 
?>

<form action="modif.php" method="post">
        <input type="text" name="nom" placeholder="<?=$rows["nom"]?>" ><br>
        
        <input type="text" name="prenom" placeholder="<?=$rows["prenom"]?>"><br>

        <input type="text" name="age" placeholder="<?=$rows["age"]?>"><br>

        <input type="text" name="email" placeholder="<?=$rows["email"]?>"><br>

        <input type="hidden" name="id" value="$_GET[id]"><br>
        
        <input type=submit value="envoi">
    </form>


    