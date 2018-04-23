<?php
/*
Panaudodami prieš tai sukurtą klasę automobilis, sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę. automobilis klasę papildykite metodu “duomenys”, kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”. lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”. lengvasis automobilis ‐ tiesiog paprastas žodis.
 */

class automobilis {
    public $gam;
    public $mod;
    public $met;
    function __construct($gm, $md, $mt){
        $this->gam = $gm;
        $this->mod = $md;
        $this->met = $mt;
    }
    function getinfo(){
        $s = "Automobilis: %s %s <br> Metai: %s";
        echo sprintf($s, $this->gam, $this->mod, $this->met) . '<br>'; // paima savybes kur yra virsuj
    }
}
class lengvasis extends automobilis {
    function f(){
        echo $this->title . '(perrasytas)<br>';
    }
    function g(){
        echo 'Labas<br>';
    }
    function h(){
        parent::f(); //pakviecia funkcija dar aukstesne uz g, tai
    }               // yra f
}


$o = new automobilis('VW', 'Passat', 1998);
$o->getinfo();
$o = new automobilis('Audi', 'A3', 1999);
$o->getinfo();
$o = new automobilis('Skoda', 'Octavia', '2007');
$o->getinfo();