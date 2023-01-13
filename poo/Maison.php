<?php

//creer une piéce
class Piece 
{
    //elle a une superficie, un nombre de fenetre, un nombre de portes.
    private $top ;
    private $left ;
    private $longueur ;
    private $largeur ;
    private $fenetre ;
    private $porte ;
    private $nom ;

    public function __construct($top, $left, $longueur, $largeur, $fenetre, $porte, $nom)
    {
        $this->top = $top ;
        $this->left = $left ;
        $this->longueur = $longueur ;
        $this->largeur = $largeur ;
        $this->fenetre = $fenetre ;
        $this->porte = $porte ;
        $this->nom = $nom ;
    }

    public function setTop($nb) {
        $this->top=$nb;
        return $this;
    }
    public function getTop() {
        return $this->top ;
    }

    public function setLeft($nb) {
        $this->left=$nb;
        return $this;
    }
    public function getLeft() {
        return $this->left;
    }

    public function setLongueur($nb) {
        $this->longueur=$nb;
        return $this;
    }
    public function getLongueur() {
        return $this->longueur;
    }

    public function setLargeur($nb) {
        $this->largeur=$nb;
        return $this;
    }
    public function getLargeur() {
        return $this->largeur;
    }

    public function setNom($n) {
        $this->nom=$n;
        return $this;
    }
    public function getNom() {
        return $this->nom;
    }
}

class Cuisine extends Piece
{
    //Heritage.
    private $arrivee_gaz ;
    private $arrivee_eau ;

    public function setGaz($nb) 
    {
        $this->arrivee_gaz = $nb ;
    }
    
    public function setEau($nb) 
    {
        $this->arrivee_eau = $nb ;
    }
}

class Sdb extends Piece 
{
    //Heritage.
    private $arrivee_eau ;

    public function setEau($nb) 
    {
        $this->arrivee_eau = $nb ;
    }
}

class Chambre extends Piece 
{
    private $nb_lits;

    public function setNbLits($nb) 
    {
        $this->nb_lits = $nb ;
    }
}

class Maison 
{
    private $cuisine;
    private $sdb;
    private $chambres = array();

    public function __construct($top, $left, $longueur, $largeur, $cuisine, $sdb)
    {
        $this->top = $top ;
        $this->left = $left ;
        $this->longueur = $longueur ;
        $this->largeur = $largeur ;
        $this->cuisine = $cuisine;
        $this->sdb = $sdb;
        
    }

    public function addChambre($ch)
    {
        $this->chambres[] = $ch;
    }

    public function setLongueur($nb) {
        $this->longueur=$nb;
        return $this;
    }
    public function getLongueur() {
        return $this->longueur;
    }

    public function setLargeur($nb) {
        $this->largeur=$nb;
        return $this;
    }
    public function getLargeur() {
        return $this->largeur;
    }

    public function setNom($n) {
        $this->nom=$n;
        return $this;
    }
    public function getNom() {
        return $this->nom;
    }

    public function plan2d() 
    { ?>
        <svg width="<?= $this->getLargeur() ?>" height="<?= $this->getLongueur() ?>">
    <?php 
        foreach($this->chambres as $chambre) {
            ?>
            <rect x="<?= $chambre->getLeft() ?>" y="<?= $chambre->getTop() ?>" width="<?= $chambre->getLargeur() ?>" height="<?= $chambre->getLongueur() ?>" style="fill:blue;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" /><?php   
            ?><text x="<?php echo $chambre->getLeft()+20 ;?>" y="<?php echo $chambre->getTop()+20 ;?>"><?= $chambre->getNom();  ?></text><?php
            } ?>
            <rect x="<?= $this->cuisine->getLeft() ?>" y="<?= $this->cuisine->getTop() ?>" width="<?= $this->cuisine->getLargeur() ?>" height="<?= $this->cuisine->getLongueur() ?>" style="fill:green;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
            <text x="<?php echo $this->cuisine->getLeft()+20 ;?>" y="<?php echo $this->cuisine->getTop()+20 ;?>"><?= $this->cuisine->getNom();  ?></text>
            <rect x="<?= $this->sdb->getLeft() ?>" y="<?= $this->sdb->getTop() ?>" width="<?= $this->sdb->getLargeur() ?>" height="<?= $this->sdb->getLongueur() ?>" style="fill:red;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
            <text x="<?php echo $this->sdb->getLeft()+20 ;?>" y="<?php echo $this->sdb->getTop()+20 ;?>"><?= $this->sdb->getNom();  ?></text>
    <?php
    } 
}

// considerons que cette maison a 1 sdb 1 cuisine et plusieurs chambres.

$cuisine = new Cuisine(150,0,150,200,2,2,"cuisine");
$cuisine->setGaz(1) ;
$cuisine->setEau(2) ;

$sdb = new Sdb(150,200,150,150,2,1,"sdb");
$sdb->setEau(3) ;

$chambre1 = new Chambre(0,150,150,150,2,2,"suite parentale");
$chambre1->setNblits(1) ;

$chambre2 = new Chambre(0,0,150,150,2,1,"chambre enfant");
$chambre2->setNblits(2) ;

$maison = new Maison (0,0,300,300,$cuisine, $sdb);
$maison->addChambre($chambre1) ;
$maison->addChambre($chambre2) ;
$maison->plan2d();

echo "<pre>";
print_r($maison);
echo "</pre>";


?>