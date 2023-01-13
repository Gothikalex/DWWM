<?php
require "connect.php" ;

$sql = $pdo -> prepare("SELECT * FROM produits WHERE categorie=$_GET[id] ");
$sql -> execute() ;
$rows = $sql -> fetchAll() ;
foreach ($rows as $value){ 
    ?>
    <p>
        <h1><?=$value['nom_produit']?></h1>
        
        
        
    </p><hr>
    <?php 


}
?>