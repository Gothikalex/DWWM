<?php
require "connect.php" ;

$mail=$_POST['email'];
$pw=$_POST['password'];

$sql = $pdo->prepare("SELECT * FROM user WHERE email='$mail' AND password='$pw' ");
$sql->execute() ;


 $sql1 = $sql->rowCount(); // donne le nbre de lignes retournées

if($sql1>0){
    echo 'bievenue ' ;
}else {
    header('login.php');
}
?>