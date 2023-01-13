<?php
require "connect.php" ;

$sql = $pdo -> prepare("SELECT * FROM user");
$sql -> execute() ;
$rows = $sql -> fetchAll() ; 
foreach ($rows as $row){ ?>
    <p>
        <h1><?=$row['nom']?><?=$row['prenom'] ?></h1>
        <p><?=$row['email']?></p>
        <a href="formulaireprérempli.php?id=<?=$row['id']?>">modif</a>
    </p><hr>
    <?php }
?>