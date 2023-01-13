<?php
require "connectusers.php";

$email =$_POST['email'];
$password = $_POST['password'];  //le password arrive en clair.


$sql $pdo->prepare("SELECT utilisateurs.nom, utilisateurs.prenom, utilisateurs.password, nom role.nom_role as monrole FROM utilisateurs")
$sql->execute([$email]);
if ($sql->rowCount() == 1) {
    //je verifie le password
    $res = $sql ->fetch(PDO::FETCH_ASSOC);
    echo"<pre>";
    print_r($res);
    echo"</pre>";
    if(password_verify($password, $res['password'])) {?>
        <h1><?=$res['nom'] ?> <?=$res['prenom']?></h1>
        <h3>ROLE: <?=$res['monrole'] ?></h3> 
      <?php     if($res['monrole'] == "DIRECTEUR" || $res['monrole'] == "ADMIN" ) { ?> 
                <a href="listeEtudiants.php">Lister les étudiants</a>
                <a href="creerEtudiants.php">Créer un étudiant</a> 
      <?php }   else if ($res['monrole'] == "SECRETAIRE") { ?>
                <a href="listeEtudiants.php">Lister les étudiants</a>
      <?php } ?>
                
    <?php } ?>
<?php }  else { ?>
    <h1 style="color:red;">Bad password</h1>
    <?php } ?>
}
?>
