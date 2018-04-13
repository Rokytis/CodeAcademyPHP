<?php

$m = [1, 2, 6, 8, 9];

$suma = 0;
$lyg = $m[0];
foreach($m as $sk){
    if ($sk % 2 == 0) $lyg = $sk;
}
$suma += $lyg; // $suma = $suma + $lyg
echo $suma;
echo $suma / count($lyg); // aritmetinis vidurkis: suma/elementu
