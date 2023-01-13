<?php 
session_start();
include "connect_boutique.php";

$email= $_POST["email"];
$password = $_POST["password"];

$sql = $pdo -> prepare("SELECT * FROM client WHERE email='$email' AND password='$password' ");
$sql->execute(); 

$r =$sql->fetch();

if ($sql->rowCount() >0) {
    ?>  <h1>Bievenue <?=$r['nom']?> <?=$r['prenom']?></h1> 
        <a href="accueilboutique.php">revenez a l'accueil pour passer vos commandes</a>
    <?php
    $_SESSION['nom'] = $r['nom'] ;
    $_SESSION['prenom'] = $r['prenom'] ;
    $_SESSION['password'] = $r['password'] ;
    $_SESSION['email'] = $r['email'] ;
    $_SESSION['id_client'] = $r['id_client'] ;
    
   
}
else { ?>
     <h1>login incorrect</h1>
     <a href="connexionboutique.php">veuillez entrer des identifiants valide</a> <?php
}


?>

