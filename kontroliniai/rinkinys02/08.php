<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes - pavadinimas, miestas, studentų skaičius. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris pavadinimas - pavadinimas, miestas, studentų skaičius - perduotus parametrus padėtų į savo savybes.
 */
class universitetas {
    public $pavadinimas;
    public $miestas;
    public $studentu_skaicius;
    function __construct($p, $m, $s){
        $this->pavadinimas = $p;
        $this->miestas = $m;
        $this->studentu_skaicius = $s;
    }
}

$s = new universitetas('KTU', 'Kaunas', 8000);

var_dump($s);
