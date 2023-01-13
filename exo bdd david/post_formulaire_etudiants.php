<?php require "conect_table_user.php"; 
    
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $id_specialite = $_POST['id_specialite']; 
    
    $hp = password_hash($password,PASSWORD_DEFAULT);

    $sql = $pdo->prepare("INSERT INTO etudiants (nom,prenom,email,password,id_specialite) VALUES(?,?,?,?,?)");
    
    $sql->execute([$nom,$prenom,$email,$hp,$id_specialite]);
?>
    




