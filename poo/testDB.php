<?php

    class DB {
        // Datas accessibles par this 

        private $pdo ;
       
       // méthodes 
        public function __construct($nombase, $user ,$password) {

            try {
              $this->pdo = new PDO(
                "mysql:host=127.0.0.1;dbname=".$nombase.";charset=UTF8", $user, $password, 
                [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
              );
            } catch (Exception $ex) { exit($ex->getMessage()); }
          }


          public function vaChercherTousLes($table) {
            $sql = $this->pdo->prepare("SELECT * FROM ".$table);
            $sql->execute();
            $resultat = $sql->fetchAll();
            return $resultat ;
          }

           public function vaChercherLe($table,$id) {
            $sql = $this->pdo->prepare("SELECT * FROM ".$table." WHERE id_client=".$id);
            $sql->execute();
            $resultat = $sql->fetch();
            return $resultat ;
          }

          public function vaChercherJointure($requete) {
            $sql = $this->pdo->prepare($requete);
            $sql->execute();
            $resultat = $sql->fetchAll();
            return $resultat ;
          }

           
}


$testdb = new DB("boutique","root","");

$lesUsers = $testdb->vaChercherTousLes("client"); 
echo "<pre>" ;
var_dump($lesUsers);
echo "</pre>"; 

$leUser = $testdb->vaChercherLe("client",1); 
echo "<pre>" ;
var_dump($leUser);
echo "</pre>"; 
// admettons que j'ai les tables produit,  commande 
// et je veux recuperer les lignes de la commande 1
$req = "SELECT produit.* FROM commande, produit WHERE produit.id = commande.id_produit commande.id = 1";
$commande =  $testdb->vaChercherJointure($req)


?>
