<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “preke”, kuri turi savybes ‐ kodas, pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ kodas, pavadinimas, kaina padėtų į savo savybes.
*/
class preke {
    public $ko;
    public $pa;
    public $ka;
    function __construct($ko, $pa, $ka){
        $this->ko = $ko;
        $this->pa = $pa;
        $this->ka = $ka;
    }
}

$o = new preke(123456, 'Sokoladas', 2);
var_dump($o);
$o = new preke(789101, 'Alus', 1);
var_dump($o);
$o = new preke(585258, 'Duona', 0.9);
var_dump($o);