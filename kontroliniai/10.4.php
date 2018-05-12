<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti norimą kiekį skaičių (funkcijos parametras turi būti masyvas). Sukurti metodą, kuris gražina didžiausią skaičių iš sąrašo. Sukurti metodą, kuris gražina mažiausią skaičių iš sąrašo. Pademonstruoti veikimą.
 */
class sarasas {
    public $sar=[];
    function add($m){
        foreach($m as $skaicius) $this->sar[] = $skaicius;
    }
    function max($m){
        $max = $m[0];
        $min = $m[0];
        foreach($m as $sk){

            if ($sk > $max) $max = $sk; // didziausias
        else $min = $sk;
        }
    }
    function getmin(){
        echo $this->pav . ' (' . $this->kodas . ') <br>';
        echo '<table>';
        foreach($this->sar as $dar){
            echo '<tr>';
            echo '<td>' . $dar['var'] . '</td>';
            echo '<td>' . $dar['pav'] . '</td>';
            echo '<td>' . $dar['par'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new sarasas();
$o->add([1,2,3,4,5,6]);
$o->getmin();
var_dump($o->sar); // neleidzia nes private