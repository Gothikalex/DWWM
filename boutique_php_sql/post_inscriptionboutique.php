<?php 
require "connect_boutique.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];

$hp = password_hash($password,PASSWORD_DEFAULT);

$sql = $pdo ->prepare("INSERT INTO client (nom,prenom,email,password) VALUES(?,?,?,?)");

$sql->execute([$nom,$prenom,$email,$hp]); 

?> 
<h2>votre compte a bien été crée</h2> 
<header><a href="accueilboutique.php">retour à l'accueil</a></header>
