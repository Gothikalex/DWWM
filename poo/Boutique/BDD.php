<?php

    class BDD {
        // Datas accessibles par this 

        private $pdo ;
       
       // méthodes 
        public function __construct($host, $nombase, $user ,$password) {

            try {
              $this->pdo = new PDO(
                "mysql:host=$host;dbname=".$nombase.";charset=UTF8", $user, $password, 
                [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
              );
            } catch (Exception $ex) { exit($ex->getMessage()); }
          }
          public function getPDO(){
            return $this->pdo;
          }
        }      
?>