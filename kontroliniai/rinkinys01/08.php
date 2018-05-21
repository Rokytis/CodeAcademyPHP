<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes - gamintojas, modelis, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus - gamintojas, modelis, kaina - perduotus parametrus padėtų į savo savybes.
 */
class dviratis {
    public $g;
    public $m;
    public $k;
    function __construct($g, $m, $k){
        $this->g = $g;
        $this->m = $m;
        $this->k = $k;
    }
    function getinfo(){
        $s = "Gamintojas: %s<br> Modelis: %s<br> Kaina (eurais): %s";
        echo sprintf($s, $this->g, $this->m, $this->k) . '<br>'; // paima savybes kur yra virsuj
    }
}

$o = new dviratis('Unibike', 'Mountain bike', 200);
$o->getinfo();
