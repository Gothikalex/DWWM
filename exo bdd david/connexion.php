<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Connectez vous ! </h1>
        <form action="post_formulaire_connexion.php" method="POST" class="formulaire_connexion">
            <label for="email"> Email :</label>
            <input type="email" id="email_clients" name="email" require>

            <label for="password"> Mots de passe :</label>
            <input type="password" id="password_clients" name="password" require>
        
            <button class="bouton_envoie_connexion" type="submit" value="connecter">Connexion</button><br>
        </form>
</body>
</html>