<?php

// global $a;
$a = 5;

function fcn(){
    //global $a;
    static $a = 0; // static prie kiekvieno prideda 1
    $a++;               // be static visur 1
    echo $a . '<br>';
}

fcn();
fcn();
fcn();
fcn();
fcn();

define('c', 55); //konstanta, negali pakeist
echo c , '<br>';
echo $_SERVER['HTTP_HOST']; //seververio pavadinima paraso bandymas.lt
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT']; // direktorija parodo

