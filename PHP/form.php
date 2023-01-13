<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="recup.php" method="get">
        
            <label for="nom">Entrez un nom : </label>
            <input type="text" name="nom">

            <label for="prenom">Entrez un prenom : </label>
            <input type="text" name="prenom">

            <label for="age">Entrez votre age : </label>
            <input type="number" name="age">
            
            <button type=submit>validez</button>
       
    </form>
</body>
</html>