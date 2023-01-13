<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_formulaire_etudiants.php" method="POST">
        <label for="nom"> Nom :</label>
        <input type="texte" id="nom_clients" name="nom">

        <label for="prenom"> Prenom :</label>
        <input type="texte" id="prenom_clients" name="prenom">
        
        
        <label for="email"> email :</label>
        <input type="email" id="email_clients" name="email" require>

        <label for="password"> mots de passe : </label>
        <input type="password" id="password_clients" name="password" require>

        <select name="id_specialite">
                <?php require "conect_table_user.php";

                $sql = $pdo->prepare("SELECT * FROM specialite");
                $sql ->execute();
                $spec = $sql->fetchAll();
                // print_r($spec);

                foreach($spec as $special) { ?>
                     <option value="<?=$special['id'] ?>" > <?= $special['type_specialite'] ?></option> 
                     <?php

                } ?>
                </select>
                <input class="bouton_envoie_inscription" type="submit" value="inscription">
                </form>
</body>
</html>
            