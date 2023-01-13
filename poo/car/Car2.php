<?php

abstract class Car 
{
    private $model;
    private $color;
    
    abstract public function gaz();
    abstract public function brake();
    public function hello() 
    {
        echo "Hello";
    }
}

?>