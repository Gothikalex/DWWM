<?php

//requête pour nombre de voiture
$sql = "SELECT COUNT(*) as total FROM voiture;";

//requête pour nombre de voiture par marque
$sql = "SELECT marque.nom, COUNT(*) FROM voiture,marque WHERE voiture.id_marque_avoir=marque.id GROUP BY marque.nom;";

// requête qui me donne le nombre de voitures par marque et par type d’énergie
$sql = "SELECT marque.nom, energie.carburant, COUNT(*) FROM voiture, marque, energie WHERE voiture.id_marque_avoir = marque.id AND voiture.id_energie_consomme = energie.id GROUP BY energie.carburant, marque.nom ORDER BY marque.nom;";

//requête qui selectionne les voituers (marque, nom, boîte, energie) non propulsées par essence et non automatiques.
$sql = "SELECT marque.nom, energie.carburant, boite_vitesse.type, COUNT(*) FROM voiture, marque, energie, boite_vitesse WHERE voiture.id_marque = marque.id AND voiture.id_energie = energie.id AND energie.carburant != 'essence' AND voiture.id_boite_vitesse = boite_vitesse.id AND boite_vitesse.type != 'automatique' GROUP BY energie.carburant, marque.nom, boite_vitesse.type ORDER BY marque.nom DESC"; 
?>