<?php
/**
Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriškas, kurios paveldi dviratis klasę. Dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “Gamintojas modelis (kaina)”. Moteriškas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Gamintojas modelis - moteriškas”. moteriškas - tiesiog paprastas žodis.
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
    function info(){
        $s = "%s%s%s";
        echo sprintf($s, $this->g, $this->m, $this->k) . '<br>';
    }
}
class moteriskas extends dviratis {
    function info(){
        $s = "Gamintojas: %s Modelis: %s (moteriskas)";
        echo sprintf($s, $this->g, $this->m) . '<br>';
    }
}
class vyriskas extends dviratis {
    function info(){
        $s = "Gamintojas: %s Modelis: %s Kaina (eurais): %s";
        echo sprintf($s, $this->g, $this->m, $this->k) . '<br>';
    }
}

$o = new moteriskas('Girlbike', 'Mountain bike', 200);
$o->info();
$o = new vyriskas('Unibike', 'Mountain bike', 200);
$o->info();