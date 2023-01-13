<?php require "conect_table_user.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];
$roles= $_POST["roles"];


$hp = password_hash($password,PASSWORD_DEFAULT);

$sql = $pdo ->prepare("INSERT INTO user (nom,prenom,email,password,roles) VALUES(?,?,?,?,?)");

$sql->execute([$nom,$prenom,$email,$hp,$roles]); 

?> <h2>votre compte a bien été créer</h2> 
            <header><a href="aceuille_.php">retour à l'accueil</a></header>



