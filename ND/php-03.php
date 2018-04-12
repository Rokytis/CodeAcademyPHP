<?php

$m = [
    'Elementas1' => 1,
    'Elementas2' => 2,
    'Elementas3' => 3,
    'Elementas4' => 4,
    'Elementas5' => 5,
];

var_dump($m);

$lyg = $m[0];
foreach($m as $sk){
    if ($sk % 2 == 0) $lyg = 0; // jei neturi liekanos padalinus
}                           //is 2, tai lyginis ir pakeiciam i 0

var_dump($lyg);