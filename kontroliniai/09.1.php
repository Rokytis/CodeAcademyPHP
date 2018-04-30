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
    function duomenys(){
        $s = "Automobilis: %s %s <br> Metai: %s";
        echo sprintf($s, $this->gam, $this->mod, $this->met) . '<br>'; // paima savybes kur yra virsuj
    }
}
class lengvasis extends automobilis {
    function duomenys(){
        $s = "Lengvasis automobilis: %s %s <br> Metai: %s";
        echo sprintf($s, $this->gam, $this->mod, $this->met) . '<br>';
    }
}
class krovininis extends automobilis {
    function duomenys(){
        $s = "Krovininis automobilis: %s %s <br> Metai: %s";
        echo sprintf($s, $this->gam, $this->mod, $this->met) . '<br>';
    }
}
$o = new lengvasis('Audi', 'A3', 1999);
$o->duomenys();
$o = new krovininis('VW', 'Passat', 1998);
$o->duomenys();