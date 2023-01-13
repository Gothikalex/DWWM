<?php

// $chaine = "ZIDIQUEH" ;
// $bonjour = "je dis bonjour";
// $email = "jam@gmail.com";
// $num = "06-07-96-45-23";
$url = `https://www.microsoft.com`;
// preg_match a trouvé des caractéres A-Z majuscule dans $chaine.
// avec le + ça veut dire une ou plusieurs fois.
// if ( preg_match('/(0[1-9])\-([0-9]{2}+\-){3}[0-9]{2}/',$num)) {
//     echo"ok\n";
// } else {
//     echo"ko\n";
// }
// preg_filter remplace les caractére entre les /.../ par ceux précisé aprés la premiére virgule.
// $res = preg_filter('/jour/', 'soir' , $bonjour) ;
// echo $res ;

if ( preg_match('/(0[1-9])\-([0-9]{2}+\-){3}[0-9]{2}/',$url)) {
    echo"ok\n";
} else {
    echo"ko\n";
}

?>