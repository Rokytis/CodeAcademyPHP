<?php

$m = ['BMW', 'Audi', 'Honda'];
var_dump($m);  // parodo pozicija ir ilgius
echo $m[2] , '<br>'; // 2-oj pozicijoj Honda
$m[1] = 'Hyundai';
echo $m[1] , '<br>';  // 1-oj pozicijoj idedad Hyundao
var_dump($m); // parodo...
echo json_encode($m); // rodo apsikeitima
$m[] = 'Skoda';    // pridedam 4 pozicija - Skoda
var_dump($m);
echo json_encode($m);
array_splice($m, 1, 1); // pasalinam Hyundai
var_dump($m);
//echo json_encode($m);

echo count($m); // elementu skaicius