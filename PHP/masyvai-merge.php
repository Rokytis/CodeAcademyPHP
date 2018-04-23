<?php

$m1 = [7,1,3,4];
$m2 = [5,2];
var_dump($m1,$m2);
$m = array_merge($m1, $m2); // apjunge
var_dump($m);
sort($m);    // isrusiavo eiles tvarka
var_dump($m);