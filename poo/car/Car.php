<?php

class Car {

    static $data = 'Essai<br>';
    static $count = 0 ;

    public function __construct() {
        self::$count++ ;
    }

    public function affiche() {
                echo self::$data."<br>";
    }

    public static function hello()
    {
        echo "Hello World!\n";  
    }


}

Car::hello();

echo "acces sans instancier \n";
echo Car::$count."<br>";

echo "instanciation de la classe avec reference x \n";
$x = new Car();
echo $x::$count."<br>";

echo "instanciaton de la classe avec reference y \n";
$y = new Car();
echo $y::$count."<br>";


?>