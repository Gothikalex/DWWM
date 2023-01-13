<?php


function listeetudiants(){
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from etudiant');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

function rechercheEtudiant($id) {
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from etudiant WHERE id = ?');
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row ;
}

function menregistrer($elts) {
    print_r($elts);
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into etudiant (nom,prenom) VALUES (?, ?)');
    $sql->execute([$elts['nom'],$elts['prenom']]);
}

function mmodif($edit) {
    require 'connect.php';
    $id=$_POST['id'];
    $sql = $pdo->prepare( "UPDATE etudiant SET etudiant.nom =? , etudiant.prenom=? WHERE etudiant.id = '$id'");
    $sql->execute([$edit['nom'],$edit['prenom']]);
}
?>