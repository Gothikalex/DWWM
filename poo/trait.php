<?php

trait Message {
    public function msg(){
        echo "la POO c'est cool<br>" ;
    }
}
trait Message2 {
    public function msg2(){
        echo "la programmation fonctionnelle c'est mieux<br>" ;
    }
}

class Bonjour {
    use Message ;
}

class Bonjour2 {
    use Message, Message2 ;
}

$bj = new Bonjour() ;
$bj->msg() ;

$bj2 = new Bonjour2() ;
$bj2->msg() ;
echo " MAIS " ;
$bj2->msg2() ;


?>