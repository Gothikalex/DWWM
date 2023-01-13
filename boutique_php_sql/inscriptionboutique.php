<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
   
    <h1>inscrivez vous</h1>
        <form action="post_inscriptionboutique.php" method="POST" class="formulaire_inscription">
            <label for="name"> Nom :</label>
            <input type="texte" id="nom_clients" name="nom">

            <label for="firstname"> Prenom :</label>
             <input type="texte" id="prenom_clients" name="prenom">

            <label for="email"> email :</label>
            <input type="email" id="email_clients" name="email" require>

            <label for="password"> mots de passe : </label>
            <input type="password" id="password_clients" name="password" require>
                
            <input class="bouton_envoie_inscription" type="submit" value="inscription">
        </form>

    
</body>
</html>