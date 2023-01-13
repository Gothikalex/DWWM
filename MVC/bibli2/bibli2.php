<?php

$livre=liste();

function liste(){
    require 'connect.php' ;
    $sql = $pdo ->prepare('SELECT livre.titre, livre.isbn FROM livre, ecrivain, ecrire WHERE id_ECRIVAIN=1 AND ecrire.id_livre=livre.id AND ecrire.id_ECRIVAIN=ecrivain.id ');
    $sql->execute();
    $rows=$sql->fetchAll();
    return $rows;
}?>
<h1>Voici tout les livres de l'écrivain Zola</h1>
<?php
 foreach ($livre as $l){
    ?>
    
    <h1><?=$l['titre'] ?> <?=$l['isbn'] ?></h1>
<?php } ?>

