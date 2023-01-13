<?php

    $x=0;

    function ajoute3($arg1){
        $ret = $arg1 += 3 ;
        return ($ret) ;
    }

    function ajoute4ref(&$arg1){
        $arg1 +=4 ;
    }

    // passage par valeur. x n'est pas modifié.
    echo ajoute3($x)."<br>" ;
    echo $x."<br>";
    ajoute3ref($x);
    echo $x."<br>";

?>