<?php include "conect_table_user.php";


$sql = $pdo -> prepare("SELECT etudiants.nom , etudiants.prenom, etudiants.email, etudiants.id, specialite.type_specialite FROM etudiants, specialite WHERE etudiants.id_specialite = specialite.id");
$sql->execute(); 
$etudiants = $sql->fetchAll();
foreach($etudiants as $liste){
    ?> <h2> <?$liste['id'] ?></h2>
    <p> <?=$liste['nom'] ?></p>
    <p> <?=$liste['prenom'] ?></p>
    <p> <?=$liste['email'] ?></p>
    <p> <?=$liste['type_specialite']?></p>
    <a href="modif_Etudiants.php">Modifier</a>
    <a href="suppr_Etudiants.php">Suprimer</a><hr>
    <?php
    
    



}; ?>