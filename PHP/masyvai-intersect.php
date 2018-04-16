<?php

$m1 = [1,2,7,5,6];
$m2 = [0,2,7,8,9];
var_dump($m1,$m2);
$m = array_merge(array_intersect($m1, $m2));  //sutampa 2 ir 7 ir pozicijos eiles tvarka 0,1
var_dump($m);

if (in_array(6,$m)) echo 'yra';
else echo 'nera';  // patikrina ar yra 6
