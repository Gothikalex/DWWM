<?php
function autoload($class) {
 require $class . '.php';
}
spl_autoload_register('autoload');


require_once 'Produit.php';

$produit = new Produit();
$product = $produit->afficheproduct();
echo '<pre>' ;
var_dump($product) ;
echo '</pre>';


?>