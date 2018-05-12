<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti norimą kiekį skaičių (funkcijos parametras turi būti masyvas). Sukurti metodą, kuris gražina didžiausią skaičių iš sąrašo. Sukurti metodą, kuris gražina mažiausią skaičių iš sąrašo. Pademonstruoti veikimą.
 */
class sarasas {
    public $sar=[];
    function add($m){
        foreach ($m as $skaicius) {
            $this->sar[] = $skaicius;
        }
    }
    function did(){
        $max =  $this->sar[0];
        foreach($this->sar as $skaicius){
            if ($skaicius > $max) $max = $skaicius; // didziausias
        }
       echo $max;
    }
    function maz(){
        $min = $this->sar[0];
        foreach($this->sar as $skaicius){
            if ($skaicius < $min) $min = $skaicius; // maziausias
        }
       echo $min;
    }
}

$o = new sarasas();
$o->add([1,2,3,4,5,6]);
var_dump($o);
echo 'Maziausias skaicius: ';
$o->maz();
echo '<br>';
echo 'Didziausias skaicius: ';
$o->did();