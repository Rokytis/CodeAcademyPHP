<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “miestas”, kuri turi savybes ‐ pavadinimas, gyventojų skaičius, regionas. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, gyventojų skaičius, regionas ‐ perduotus parametrus padėtų į savo savybes.
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
        function getinfo(){
            $s = "Miestas: %s, gyventoju skaicius: %s, regionas: %s";
            echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>'; // paima savybes kur yra virsuj
        }
    }


$o = new miestas('Sakiai', 8000, 'Suvalkija');
$o->getinfo();
$o = new miestas('Kretinga', 15000, 'Zemaitija');
$o->getinfo();
$o = new miestas('Alytus', 7000, 'Dzukija');
$o->getinfo();