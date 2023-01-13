<?php
session_start();
require "connect_boutique.php";
// recupération de l'id produit via la variable $_GET, id que l'on récupére de la page précédente.
$desprod=$_GET['id_produit'];

$sql = $pdo->prepare("SELECT * FROM produits WHERE produits.id_produit='$desprod' ");
$sql ->execute();

$produit=$sql ->fetch() ;

?> 
    <!-- affiche tout le détails du produit désigné par l'id récupéré -->
    <h1><?=$produit['nom_produit']?></h1>
    <img src="<?=$produit['photo']?>">
    <p>Prix = <?=$produit['prix']?></p>
    <p>TVA = <?=$produit['tva']?> %</p>
    <p>Description : <?=$produit['description']?></p>

<?php
    // si l'on est connecté, permet d'afficher un selecteur de quantité et un bouton acheter.
    if (isset($_SESSION['nom'])) {
        ?> 
        <form action="intopanier.php" method="POST" class="achat">
            <input type="hidden" name="id_produit" value=" <?=$desprod ?>">
            <label for="quantite"> quantité</label>
            <input type="number" name='quantite' min="0" max="10">

            <input class="bouton_acheter" type="submit" value="acheter">
        </form>

         <?php

    } 
    ?>