<?php

$m = [
    'gamintojas' => 'Honda',
    'modelis' => 'Civic',
    'metai' => 2005,
    'kaina' => 2000,
];

var_dump($m);
echo $m['metai']; //rodo metus
$m['spalva'] = 'raudona'; // pridejo spalva
var_dump($m);  // rodo

$m['kaina'] = 3000;  // pakeite kaina
var_dump($m);  // rodo

unset($m['metai']); // pasalinam metus
var_dump($m);
echo count($m);  // elementu skaicius