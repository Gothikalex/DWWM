<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="record.php" method="post">
        <input type="text" name="nom" placeholder="Nom">
        
        <input type="text" name="prenom" placeholder="Prenom">

        <input type="text" name="age" placeholder="Age">
        
        coding <input type=checkbox name= interest[] value="envoi">
        music <input type=checkbox name= interest[] value="envoi">
        dance <input type=checkbox name= interest[] value="envoi">

        <input type="hidden" name="identifiant" value="12">
        <input type="submit" value="envoi" >
    </form>
    
</body>
</html>