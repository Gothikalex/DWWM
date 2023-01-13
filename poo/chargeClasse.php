<?php

function chargerClasse($classe) 
{
    require $classe . '.php';  // On inclut la classe correspondate au paramètre passé.
}

spl_autoload_register('chargerClasse'); // on enregistre la fonction en autoload pour qu'elle soit appelée dès quon instanciera une classe non déclarée.


$perso = new Personnage("Sparadrap","Mercurocroum",35) ; 
// instanciation de la classe Personnage qui n'est pas délcarée dans ce fichier.
$perso->parler("ESSAI");
// instanciation d'une classe héritée de Personnage.
$employe = new Employe("Lamer","Michelle",70);
$employe->parler(" je suis un employé et je m'appelle " .$employe->getNom()." ".$employe->getPrenom());


?>