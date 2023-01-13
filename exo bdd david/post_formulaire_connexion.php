<?php 
session_start();
include "conect_table_user.php";

$email= $_POST["email"];
$password = $_POST["password"];

$sql = $pdo -> prepare("SELECT user.nom , user.prenom, user.email, user.password, user.roles FROM user, table_role WHERE user.roles = table_role.id AND user.email = ?");
$sql->execute([$email]); 

$utilisateur = $sql->fetchAll();

foreach($utilisateur as $liste){
    if (password_verify($password , $liste['password'])) {
        ?> <h2> <?$liste['id'] ?></h2>
        <h2> <?=$liste['nom'] ?></h2>
        <h2> <?=$liste['prenom'] ?></h2>
        <h3> <?=$liste['email'] ?></h3>
        <p> <?=$liste['roles'] ?></p> <?php 

        $_SESSION["nom"]= $liste['nom'] ;
        $_SESSION ["prenom"]= $liste['prenom'] ;
        $_SESSION["roles"]= $liste['roles'] ;


    if($liste['roles'] == 1){ ?>

    <a href=listeEtudiants.php>lister les etudiants</a>
    <a href=creeEtudiants.php> crée un etudiants</a>
    <a href=otrepage.php> une autre page</a>  <?php
}; 
     if($liste['roles'] == 2) { ?>

        
    <a href=listeEtudiants.php>lister les etudiants</a>
    <a href=otrepage.php> une autre page</a> <?php
    }
    }else {
        ?> <h2>ERREUR DE CONNECTION</h2> 
            <header><a href="aceuille_.php">retour à l'accueil</a></header><?php
    }
   }
    
       
           
         ?>