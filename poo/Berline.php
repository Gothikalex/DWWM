<?php

require "Car2.php";

class Berline extends Car 
{
    public function gaz()
    {
        echo "vroum vroum vroum\n";
    }

    public function brake()
    {
        echo "stooooooooooooooooop\n";
    }
}

$berline = new Berline();

$berline->gaz();
$berline->brake();
?>