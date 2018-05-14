<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzaminų rezultatus: vardas, fizika, matematika, programavimas (dšimtbalėje sistemoje). Sukurti metodą, kuris gražina visus egzaminus išlaikiusių studentų sąrašą (egzaminas yra išlaikytas, jeigu rezultatas yra >= 5. Sukurti metodą, kuris gražina egzaminų laikymo vidurkį. Pademonstruoti veikimą.
*/

class egzaminai {
    public $sarasas=[];
    function add($va, $fi, $ma, $pr){
        $this->sarasas[] = [
            'Vardas' => $va,
            'Fizika' => $fi,
            'Matematika' => $ma,
            'Programavimas' => $pr,
        ];
    }
    function islaike(){
            $m =  [];
            foreach($this->sarasas as $studentas){
                if ($studentas['Fizika'] >= 5 and $studentas['Matematika'] >= 5  and $studentas['Programavimas'] >= 5) $m[] = $studentas['Vardas']; // islaike
            }
        return $m;
    }
    function vidurkis(){
        $s = 0;
        foreach($this->sarasas as $studentas){
            $s += $studentas['Fizika'] + $studentas['Matematika'] +$studentas['Programavimas'];
        }
        $v = $s / (count($this->sarasas)*3);
        return $v;
    }
}

$o = new egzaminai();
$o->add('Jonas',9,10,10);
$o->add('Petras',8,9,10);
$o->add('Dainius',5,5,10);
$o->add('Algirdas',4,4,9);
echo 'Visu studentu sarasas:';
echo '<br>';
var_dump($o);
echo 'Islaikiusiu studentu sarasas:';
echo '<br>';
$rez=$o->islaike();
var_dump($rez);
echo 'Vidurkis:';
echo $o->vidurkis();