<?php
session_start();
require "connect_boutique.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
<p>
    <!-- pour s'inscrire a la boutique -->
    <h1 class="titre_1">Bienvenue , Inscrivez vous maintenant !</h1><br>
    <button  class="inscription" type="button"><a href="inscriptionboutique.php">Inscription</a></button><br>

    <?php
    
    //  si on est connecté 
    if (isset($_SESSION['id_client'])){
        // affiche le bouton pour se déco
        ?>  
        <h2 class="titre_2"> <?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></h2><br>
        <button  class="deconnexion" type="button"><a href="deconnexionboutique.php">deconnexion</a></button><br>
        <!-- affiche le contenu du panier du client -->
        <?php
            
            $sql=$pdo->prepare("SELECT * FROM panier,produits WHERE panier.id_commande=? AND produits.id_produit=panier.id_produit");
            $sql->execute([$_SESSION['id_commande']]);
            $panier=$sql->fetchAll();
            ?><div>récap du panier</div><?php
            foreach($panier as $p){
                ?>  <p>
                        
                        <div> <?=$p['nom_produit']?>  <?=$p['prix']?>€  nombre: <?=$p['quantite']?></div>
                    </p>
                <?php
            }
            ?>
            <div>TOTAL =   <?=$total= $p['prix'] * $p['quantite']?> €  </div>
        
        
        <hr>
        <?php 
    } else{ 
        // sinon propose de se co'
        ?>
        <h2 class="titre_2"> Vous êtes déjà membre ? Connectez vous !</h2><br>
        <button  class="connexion" type="button"><a href="connexionboutique.php">Connexion</a></button><br>
        <hr>
        <?php
    }

    

    ?>
</p> 
        <!-- affiche toute les images et les nom des produits de la boutique -->
      <?php   
      $sql = $pdo->prepare("SELECT nom_produit , photo, id_produit FROM produits");
      $sql ->execute();
      $album = $sql->fetchAll();
      foreach ($album as $id) { 
        ?> <a href="detailproduit.php?id_produit=<?=$id['id_produit']?>" type=submit value="envoi"><p><?=$id['nom_produit']?></p></a>
        <img height=200px width=200px src="<?=$id['photo']?>">
        <hr>
     <?php } ?> 
         
</body>
</html>