<?php
/**
Sukurti klasę su savybe skaičiai (masyvas). Sukurti metodą, kurio pagalba būtų galima papildyti skaičių masyvą nustatytų kiekiu atsitiktiniu skaičių. Atsitiktiniai skaičiai turi būti generuojami pagal nustatytas ribas nuo iki (metodo parametrai: kiek atsitiktinių skaičių, ribos pradžia ir ribos pabaiga). Sukurti metodą, kuris gražina surūšiuotą sąrašą skaičių, kurie yra nelyginiai. Pademonstruoti veikimą.
 */
class cla {
    public $skaiciai = [];
    function add($n, $nuo, $iki){
        for ($i=0; $i<$n; $i++) $this->skaiciai[] = rand($nuo, $iki); //rand -atsitiktiniai
    }
    function info(){
        $m = [];
        foreach ($this->skaiciai as $skaicius){
            if ($skaicius % 2 != 0) $m[] = $skaicius; // nelyginiai
            }
            sort($m);
            return $m;
    }
}
$o = new cla();
$o->add(20,1,1000); // kiek skaiciu - n: 20
var_dump($o); // rodo visus
$m = $o->info();
var_dump($m); // rodo nelyginius