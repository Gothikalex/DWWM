<?php
spl_autoload_register('autoload');

Class Produit {

    // private $nom_produit ;
    // private $photo ;
    // private $prix ;
    // private $tva ;
    // private $description ;

    // public function __construct(){
    //     $this->nom_produit = $nom_produit ;
    //     $this->photo = $photo ;
    //     $this->prix = $prix ;
    //     $this->tva = $tva ;
    //     $this->description = $description ;
    // }
    public function addproduct($nom_produit, $photo, $prix, $tva, $description){
        $bdd = new BDD("127.0.0.1","boutique","root","");
        $pdo = $bdd->getpdo();

        $sql = $pdo->prepare("INSERT INTO produit (nom_produit,photo, prix, tva, description) VALUES (?,?,?,?,?)" );
        $sql->execute([$nom_produit, $photo, $prix, $tva, $description]);
}

public function afficheproduct(){
    $bdd = new BDD("127.0.0.1","boutique","root","");
    $pdo = $bdd->getPDO();

    $sql = $pdo->prepare("SELECT * FROM produits" );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
}

?>