<?php
require "connect.php" ;

try{
$sql = $pdo -> prepare("SELECT * FROM user");
$sql -> execute() ;
}
catch (Execption $e){
    echo $e->getMessage() ;
}

$rows = $sql -> fetchAll() ; //va chercher tout les users
echo '<pre>' ;
print_r($rows) ;
echo '</pre>' ;

$sql = $pdo -> prepare("SELECT * FROM user WHERE id = 1 ");
$sql -> execute() ;
$rows = $sql -> fetch() ; // va chercher 1 user dont l'id est 1
print_r($rows);

?>