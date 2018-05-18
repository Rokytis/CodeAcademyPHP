<?php
/**
Sukurkite klasę klasę asmuo su savybėmis: vardas, pavarde, amžius (reikšmės suteikiamos konstruktoriaus pagalba). Sukurkite klases: darbuotojas ir studentas, kurios paveldi klasę asmuo. Klasė asmuo turi metodą info, kuris išveda teksto eilutę: "Vardas, pavardė, amčius" (duomenis įstatyti iš savybių). Darbuotojas turi papildomas savybes: pareigos, atlyginimas. Studentas turti papildomą savybę: specialybė. Darbuotojo atveju metodas info turi išvesti tekstą: "Darbuotojas: vardas, pavardė, amžius, pareigos, atlyginimas" (reikšmes įstatyti iš savybių). Studento atveju metodas info turi išvesti tekstą: "Studentas: vardas, pavardė, amžius, specialybė" (reikšmes įstatyti iš savybių).
 */

class asmuo {
    public $vardas;
    public $pavarde;
    public $amzius;
    function __construct($vardas, $pavarde, $amzius){
        $this->va = $vardas;
        $this->pa = $pavarde;
        $this->am = $amzius;
    }
    function getinfo(){
        $s = "%s %s %s";
        echo sprintf($s, $this->va, $this->pa, $this->am) . '<br>'; // paima savybes kur yra virsuj
    }
}
class studentas extends asmuo {
    function info($sp){
        $s = "Studentas: %s  %s, amzius: %s, specialybe: %s";
        echo sprintf($s, $this->va, $this->pa, $this->am, $sp) . '<br>'; // paima savybes kur yra virsuj
    }
}
class darbuotojas extends asmuo {
    function info($par,  $at){
        $s = "Darbuotojas: %s %s, amzius: %s, pareigos: %s, atlyginimas: %s";
        echo sprintf($s, $this->va, $this->pa, $this->am, $par,  $at) . '<br>'; // paima savybes kur yra virsuj
    }
}

$o = new studentas('Jonas', 'Jonaitis', 20);
$o->info('elektronika');
$o = new darbuotojas('Petras', 'Petraitis', 30);
$o->info('statybininkas', 800);