<?php
require "connectusers.php" ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>formulaire d'inscription</h1>
    <form action="inscription.php" method="post">
        <input type="text" name="email" placeholder="email">
        
        <input type="text" name="password" placeholder="mot de passe">

        <input type="text" name="nom" placeholder="nom">
        
        <input type="text" name="prenom" placeholder="prenom">

        <select name="nom_role" >

            <?php

            $sql = $pdo -> prepare ("SELECT * FROM nom role");
            $sql->execute();
            $roles = $sql->fetchAll();print_r($roles);

            foreach($roles as $role) {
                ?><option value ="<?= $role['id'] ?>"> <?= $role['type']?></option>
            <?php } ?>

        </select>

        <button type="submit">valider inscription</button>
        </form>
        <h2><a href="connectionhtml.php"></a>Compte déjà existant</h2>
    
</body>
</html>
