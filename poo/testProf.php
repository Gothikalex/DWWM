<?php
require_once "Professeur.php";
require_once "Specialite.php";


$spe1 =new Specialite("S01","Java");
$spe2 =new Specialite("S02","Python");
$spe3 =new Specialite("S03","GO");

$prof1 = new Professeur("Foldingue","Eddy","fol.eddy@gmail.com");
$prof1->setSpecialite($spe1);
$prof1->setSpecialite($spe2);
$prof1->setSpecialite($spe3);

echo "<pre>";
print_r($prof1);
echo "</pre>";

$prof1->afficheProfesseur();

?>