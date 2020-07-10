<?php

/**
     * permet de sécuriser une chaine de caractères
     * @param  $string
     * @return string
*/

function str_secure($string){
    return trim(htmlspecialchars($string));
}


/**
    *permets d'afficher les variables de façon lisible

    *@param $var

*/

function debug($var){
    echo'<pre>';
    var_dump($var);
    echo'</pre>';
}