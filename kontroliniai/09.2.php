<?php
/**
Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “kursas” veikimą.
 */
class CodeAcademy {
    public $dt;
    public $sk;
    public $au;
    function __construct($dt, $sk, $au){
        $this->dt = $dt;
        $this->sk = $sk;
        $this->au = $au;
    }
    function duomenys(){
 //       $s = "CodeAcademy:<br> Data: %s <br>Skaicius: %s <br>Auditorija: %s";
        $s = "%s %s %s";
        echo sprintf($s, $this->dt, $this->sk, $this->au) . '<br>'; // paima savybes kur yra virsuj
    }
}
class backend extends CodeAcademy {
    function duomenys(){
        $s = "Backend kursas:<br> Data: %s <br>Skaicius: %s <br>Auditorija: %s";
        echo sprintf($s, $this->dt, $this->sk, $this->au) . '<br>'; // paima savybes kur yra virsuj
    }
}
class frontend extends CodeAcademy {
    function duomenys(){
        $s = "Frontend kursas:<br> Data: %s <br>Skaicius: %s <br>Auditorija: %s";
        echo sprintf($s, $this->dt, $this->sk, $this->au) . '<br>'; // paima savybes kur yra virsuj
    }
}

$o = new backend(03.26, 3, 102);
$o->duomenys();
$o = new frontend(04.01, 20, 104);
$o->duomenys();