<?php

$m = [
    'Elementas1' => 1,
    'Elementas2' => 2,
    'Elementas3' => 7,
    'Elementas4' => 5,
    'Elementas5' => 8
];
foreach ($m as $element => $sk) {
    if ($sk % 2 !=0) { // jei padalinus is 2, liekana yra, tai nelyg
        $m[$element] = 0;  // pakeiciam elementa i nuli
    }
}
//print_r($m);

var_dump($m);