<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi
savybes - gamintojas, modelis, metai. Sukurkite standartinį klasės __construct
metodą, kuriam perdavus tris parametrus - gamintojas, modelis, metai -
perduotus parametrus padėtų į savo savybes
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

$o = new automobilis('VW', 'Passat', 1998);
$o->getinfo();
$o = new automobilis('Audi', 'A3', 1999);
$o->getinfo();
$o = new automobilis('Skoda', 'Octavia', '2007');
$o->getinfo();