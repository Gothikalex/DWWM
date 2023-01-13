<?php
require "connect.php" ;

$sql = $pdo -> prepare("SELECT * FROM nom_categorie ");
$sql -> execute() ;
$rows = $sql -> fetchAll() ;
foreach ($rows as $id){ 
    ?>
    <p>
        <h1><?=$id['id']?></h1>
        <a href="affichecateg.php?id=<?=$id["id"]?>"><?=$id["nomcateg"]?></a>
        
        
    </p><hr>
    <?php 

}
?>