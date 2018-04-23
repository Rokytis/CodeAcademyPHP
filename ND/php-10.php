<?php
/**
Sukurti funkciją, kuri apjungia du masyvus, pašalina dublikatus iš apjungto
masyvo, jį surūšiuoja ir gražina kaip rezultatą. Pademonstruoti funkcijos
veikimą.
 */

$m1 = [7,1,3,4,2,4];
$m2 = [5,2,1,3,5];
var_dump($m1,$m2);

function x($m1,$m2){
    $m = array_merge($m1, $m2);         //apjunge
    $mm = array_merge(array_unique($m)); //pasalina dublicate
    sort($mm);  // surusiuoja
    var_dump($mm);
}
x($m1,$m2);    //taip kvieciam funkcija, kad ji pradetu veikti
