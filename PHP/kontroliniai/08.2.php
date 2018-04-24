<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/
class CodeAcademy {
    public $dt;
    public $sk;
    public $au;
    function __construct($dt, $sk, $au){
        $this->dt = $dt;
        $this->sk = $sk;
        $this->au = $au;
    }
    function getinfo(){
        $s = "CodeAcademy:<br> Data: %s <br>Skaicius: %s <br>Auditorija: %s";
        echo sprintf($s, $this->dt, $this->sk, $this->au) . '<br>'; // paima savybes kur yra virsuj
    }
}

$o = new CodeAcademy(03.01, 3, 102);
$o->getinfo();
$o = new CodeAcademy(04.01, 10, 103);
$o->getinfo();
$o = new CodeAcademy(05.01, 20, 104);
$o->getinfo();