<?php

class asmuo {
    public $var = 'Jonas';
    public $pav = 'Jonaitis';
    public $par = 'Direktorius';
    public function getinfo(){
        $s = "%s %s yra %s";
        echo sprintf($s, $this->var, $this->pav, $this->par); // paima savybes kur yra virsuj
    }
}

$o = new asmuo();
$o->getinfo();