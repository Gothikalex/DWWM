<?php
require "connect.php" ;


$file = fopen("produit2.csv","r");

while(!feof($file)) {
    $tab = fgetcsv($file,1024,";") ;
    // echo "<pre>" ;
    // print_r($tab) ;
    // echo"</pre>" ;

$categorie = $tab[0];
$nom_produit = $tab[1];
$description = $tab[2];
$pht = $tab[3];
$tva = $tab[4];
$photo = $tab[5];

$sql = $pdo->prepare("INSERT INTO produits (categorie,nom_produit,description,pht,tva,photo) VALUES(?,?,?,?,?,?)");

$sql->execute([$categorie,$nom_produit,$description,$pht,$tva,$photo]);
}

fclose($file);

?>