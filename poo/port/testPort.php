<?php

function charge($classe) {
    require $classe.".php";
}

spl_autoload_register("charge");

// require_once "port.php";
// require_once "Voilier.php";
// require_once "sousMarin.php";

$port = new Port("Brest") ;

$v = new Voilier(60) ;

$sm = new SousMarin(80) ;

$port->accueilEngin($v) ;
$port->accueilEngin($sm) ;

?>