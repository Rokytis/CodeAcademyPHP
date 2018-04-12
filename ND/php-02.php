<?php

$m = [
    'Vardas' => 'Jonas',
    'Pavarde' => 'Jonaitis',
    'Gimimo metai' => 1991,
    'Lytis' => 'Vyras'
];

var_dump($m);
echo $m['Gimimo metai'];
$m['Amzius'] = 27; // pridejo amziu
var_dump($m);  // rodo

$m['Pavarde'] = 'Jonaitis Jaunesnysis';  // pakeite pavarde
var_dump($m);  // rodo

unset($m['Gimimo metai']); // pasalinam metus
var_dump($m);
echo count($m);  // elementu skaicius