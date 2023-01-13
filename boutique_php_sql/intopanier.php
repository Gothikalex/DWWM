<?php
session_start();
require "connect_boutique.php";

$quantite= $_POST["quantite"];
$id_produit= $_POST["id_produit"];
$id_client=$_SESSION["id_client"];


if (!isset($_SESSION['id_commande'])){
    $sql1=$pdo->prepare("INSERT INTO commande(id_client ) VALUES (?)");
    $sql1->execute([$id_client]);
    $_SESSION['id_commande']=$pdo->lastInsertId();
}

$sql=$pdo->prepare("INSERT INTO panier(quantite, id_produit,id_commande ) VALUES (?,?,?)");
$sql->execute([$quantite,$id_produit,$_SESSION['id_commande']]);

header('location: accueilboutique.php') 

?>