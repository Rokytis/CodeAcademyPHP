<?php

$m = [1, 2, 6, 8, 10];

var_dump($m);

$lyg = $m[0];
foreach($m as $sk){
    if ($sk % 2 == 0) $lyg = 0; // jei neturi liekanos padalinus
}                           //is 2, tai lyginis ir pakeiciam i 0

var_dump($lyg);