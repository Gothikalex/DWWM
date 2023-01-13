<?php
include "connectusers.php" ;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$id_role = $_POST['nom_role'];

$hp= password_hash($password);
$sql = $pdo -> ("INSERT INTO utilisateurs(nom,prenom,email,password,id_role) VALUES (?,?,?,?,?");
$sql->execute([$nom, $prenom, $email, $password, $id_role]);
?>