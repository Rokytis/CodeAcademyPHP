<?php
/**
Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases standartinis ir technologinis, kurios paveldi universitetas klasę. Universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “Pavadinimas, miestas (studentų skaičius)”. Technologinis klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Pavadinimas, miestas (studentų skaičius) - technologinis”. technologinis - tiesiog paprastas žodis.
 */
class universitetas {
    public $p;
    public $m;
    public $s;
    function __construct($p, $m, $s){
        $this->p = $p;
        $this->m = $m;
        $this->s = $s;
    }
    function info(){
        $s = "%s %s (%s)";
        echo sprintf($s, $this->p, $this->m, $this->s);
    }
}
$o = new universitetas('KTU', 'Kaunas', 6000);
$o->info();
echo '<br>';
class standartinis extends universitetas {}
$o = new standartinis('VDU', 'Kaunas', 7000);
$o->info();
echo '<br>';
class technologinis extends universitetas {
    function info(){
        $s = "%s %s (%s) - technologinis";
        echo sprintf($s, $this->p, $this->m, $this->s);
    }
}

$o = new technologinis('KTU', 'Kaunas', 6000);
$o->info();