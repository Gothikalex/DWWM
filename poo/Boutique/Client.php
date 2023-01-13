<?php

Class Client {

    
    public function addclient($email, $password, $nom, $prenom){
        $bdd = new BDD("127.0.0.1","boutique","root","");
        $pdo = $bdd->getpdo();

        $sql = $pdo->prepare("INSERT INTO client (email, password, nom, prenom) VALUES (?,?,?,?)" );
        $sql->execute([$email, $password, $nom, $prenom]);
}

public function afficheclient () {
    $bdd = new BDD("127.0.0.1","boutique","root","");
    $pdo = $bdd->getpdo();

    $sql = $pdo->prepare("SELECT * FROM client");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

public function afficheform(){
    require_once "inscriptionboutique.php" ;
}

public function sinscrire() {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hp = password_hash($password,PASSWORD_DEFAULT);

    $sql = $pdo ->prepare("INSERT INTO client (nom,prenom,email,password) VALUES(?,?,?,?)");

    $sql->execute([$nom,$prenom,$email,$hp]); 

    }
}
?>