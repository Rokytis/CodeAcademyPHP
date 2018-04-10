<?php

$m = [1, 2, 6, 8, 10];

$min = $m[0]; // priskiriam maziausia reiksme
foreach($m as $sk){
    if ($sk < $min) $min = $sk; // jei skaicius mazesnis tai maziausias
}
echo $min; // maziausia elementa suranda,
