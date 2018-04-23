<?php
/**
Sukurti klasę "imone" su savybėmis: "pavadinimas", "adresas", "telefonas", "pastas", "darbuotojai". Sukurti konstruktorių, kuris patalpina duomenis į savybes "pavadinimas", "adresas", "telefonas", "pastas". Sukurti metodą, kuris patalpina į savybę "darbuotojai" (sąrašą) darbuotojo duomenis: "vardas", "pavarde", "pareigos", "atlyginimas". Sukurti metodą, kuris išveda informaciją apie įmonę: pavadinimas, adresas, telefonas. el. paštas, darbuotojų skaičius. Sukurti metodą, kuris išveda darbuotojų sąrašą. Pademonstruoti veikimą.
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