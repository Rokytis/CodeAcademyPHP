<?php
/*
Panaudodami prieš tai sukurtą klasę "preke", sukurkite klases "vaikams" ir "studentams", kurios paveldi "preke" klasę. "preke" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”. "vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”. vaikams‐ tiesiog paprastas žodis. "studentams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (studentams)”. studentams‐ tiesiog paprastas žodis. "vaikams" ir "studentams" klasių metodas info turi turėti parametrą "nuolaida" (procentais), kurio pagalba būtų perskaičiuojama prekės kaina išvedimo metu. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/
class preke {
    public $ko;
    public $pa;
    public $ka;
    function __construct($ko, $pa, $ka){
        $this->ko = $ko;
        $this->pa = $pa;
        $this->ka = $ka;
    }
    function getinfo(){
        $s = "%s %s %s";
        echo sprintf($s, $this->ko, $this->pa, $this->ka) . '<br>'; // paima savybes kur yra virsuj
    }
}
class vaikams extends preke {
    function info($n){
        $this->ka = $this->ka - ($this->ka)*$n/100;
        $s = "Kodas: %s Pavadinimas: %s Kaina: %s(vaikams)";
        echo sprintf($s, $this->ko, $this->pa, $this->ka) . '<br>'; // paima savybes kur yra virsuj
    }
}
class studentams extends preke {
    function info($n){
        $this->ka = $this->ka - ($this->ka*$n/100);
        $s = "Kodas: %s Pavadinimas: %s Kaina: %s studentams)";
        echo sprintf($s, $this->ko, $this->pa, $this->ka) . '<br>'; // paima savybes kur yra virsuj
    }
}
$o = new preke(123456, 'Sokoladas', 2);
$o->getinfo();
$o = new vaikams(123456, 'Sokoladas', 2);
$o->info(60);
$o = new studentams(123456, 'Sokoladas', 2);
$o->info(50);