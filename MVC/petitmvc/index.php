<?php 

// print_r($_GET) ;
// $controller = $_GET['controller'];
// $action = $_GET['action'];
// $argument1 = NULL;

// dans l'url si on tape http://localhost/petitmvc/index.php?action=etudiant/creer

$action = $_GET['action'];
$tab = explode ('/' , $action);
// dans $action je peux avoir
// controller/action
//controller/action/argument

$arg = NULL;
$controller = $tab[0];
$fonction = $tab [1];
if (isset($tab[2])) {
    $arg = $tab[2] ;
}

require('controller/'.$tab[0].'.php') ;
 
if (isset($arg)) {
   
    $fonction($arg);
} else {
    $fonction();
}
?>