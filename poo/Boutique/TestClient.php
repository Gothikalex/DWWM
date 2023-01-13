<?php
session_start();

function autoload($class) {
 require $class . '.php';
}
spl_autoload_register('autoload');

$produit = new Client();
$product = $produit->afficheform();
echo '<pre>' ;
var_dump($product) ;
echo '</pre>';


?>