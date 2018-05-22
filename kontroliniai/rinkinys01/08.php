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
}

$s = new dviratis('UniBike', 'Moteriškas', 1000);

var_dump($s);
