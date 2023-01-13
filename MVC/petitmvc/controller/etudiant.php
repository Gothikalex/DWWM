<?php

function affiche_etudiants() {
  // dans cette fonction le controller va chercher 
  // ce qu'il faut pour afficher les étudiants
  // 1) les données 
  // 2) l'affichage des données
  require ('model/etudiant.php');
  // récupérer les données
  $etudiants = listeetudiants();
  require ('view/listeetudiants.php');
}

function affiche1etudiant($id) {
    require ('model/etudiant.php');
    $etudiant = rechercheEtudiant($id);
    require('view/affiche1etudiant.php');
}

function creer(){
    require ('view/creeretudiant.php');
}

function enregistrer() {
    require('model/etudiant.php');
    menregistrer($_POST);
}

function modif(){
    require('modif.php');
    mmodif($_POST);
}
?>