<?php

class asmuo {
    public $vardas = 'Jonas';
    public $pavarde = 'Jonaitis';
    private $atlyginimas = 1000;
}

$o = new asmuo();  // sukurem klases objekta
var_dump($o);
echo $o->vardas . ' ' . $o->pavarde; // apjunge
echo '<br>';
//echo $o->atlyginimas; // negalima private informacijos isvest

