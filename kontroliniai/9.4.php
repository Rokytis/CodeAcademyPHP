<?php
/*
Panaudodami prieš tai sukurtą klasę "miestas", sukurkite klases "didelis" ir "mazas", kurios paveldi "miestas" klasę. "miestas" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, gyventojų skaičius, regionas”. "didelis" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “pavadinimas, gyventojų skaičius, regionas (didelis miestas)”. didelis miestas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/
class miestas {
    public $pavadinimas;
    public $gyventoju_skaicius;
    public $regionas;
    function __construct($p, $g, $r)
    {
        $this->pavadinimas = $p;
        $this->gyventoju_skaicius = $g;
        $this->regionas = $r;
    }
        function info(){
            $s = "%s %s %s";
            echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>'; // paima savybes kur yra virsuj
        }
    }
class didelis extends miestas {
    function info(){
        $s = "Pavadinimas: %s, gyventoju skaicius: %s, regionas: %s (didelis miestas)";
        echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>'; // paima savybes kur yra virsuj
    }
}
class mazas extends miestas {
    function info(){
        $s = "Pavadinimas: %s, gyventoju skaicius: %s, regionas: %s";
        echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>'; // paima savybes kur yra virsuj
    }
}

$o = new mazas('Sakiai', 8000, 'Suvalkija');
$o->info();
$o = new didelis('Kretinga', 15000, 'Zemaitija');
$o->info();