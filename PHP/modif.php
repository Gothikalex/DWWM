<?php
require "connect.php" ;
$sql = $pdo -> prepare("SELECT * FROM user WHERE id = 2 ");
$sql -> execute() ;
$rows = $sql -> fetch() ; 
// print_r($rows);

$sql = $pdo-> prepare("UPDATE user SET nom = 'lamisére' WHERE id= 2") ;
$sql -> execute() ;

?>