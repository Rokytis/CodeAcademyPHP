<?php
/**
Sukurti klasę darbuotojai, kurioje yra savybė skirta darbuotojų sąrašui saugoti. Sukurti metodą, kurio pagalba galima patalpinti darbuotojo duomenis į sąrašą: asmens kodas, pavarde ir vardas, pareigos, atlyginimas. Sukurti metodą, kurio pagalba galima būtų pašalinti darbuotojo duomenis iš sąrašo pagal asmens kodą. Pademonstruoti veikimą.
 */

class darbuotojai {
    public $sar =[];
    function add($ak, $pv, $va, $pa, $at){
        $this->sar[$ak] = [
            'ak' => $ak,
            'pv' => $pv,
            'va' => $va,
            'pa' => $pa,
            'at' => $at,
        ];
    }
    function del($ak){
        unset($this->sar[$ak]);
    }
}

$o = new darbuotojai();
$o-> add('1234567891','Petraitis', 'Petras','darbininkas',500);
$o-> add('1234567892','Jonaitis', 'Jonas','direktorius',2000);
$o-> add('1234567893','Antanaitis', 'Antanas','vadybininkas',1000);

var_dump($o);
$o->del('1234567891');
var_dump($o);