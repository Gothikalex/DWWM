<?php


function listeprofs(){
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from professeur ORDER BY nom');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

?>