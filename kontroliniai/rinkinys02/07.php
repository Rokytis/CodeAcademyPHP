<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 5 elementų - teksto eilučių. Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą dižiosiomis raidėmis.
 */
$m = ['labas', 'RyTaS', 'Visiems', 'KAIP', 'sEKASI'];
var_dump($m);
$i = 0;
foreach($m as $a){
    $m[$i++] = strtoupper($a);
    //$m[$i++] = strtolower($a); //mazosios
   //$m[$i++] = ucfirst($a); //pirma didzioji
    //$m[$i++] = ucfirst(strtolower($a));//pirma didzioji, kitos mazosios
}
var_dump($m);
