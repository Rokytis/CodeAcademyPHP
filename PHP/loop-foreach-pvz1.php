<?php

$m = [1, 2, 6, 8, 10];

$suma = 0;
foreach($m as $sk){
    $suma += $sk; // $suma = $suma + $sk
}
echo $suma / count($m); // aritmetinis vidurkis: suma/elementu
