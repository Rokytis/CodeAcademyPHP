<?php

$m = ['BMW', 'Audi', 'Honda', 'Hyundai', 'Volvo', 'VW','Mazda', 'Skoda', 'Fiat', 'Citroen'];

var_dump($m);

$ilgiausiaszodis = 100;
for ($i = 0; $i < count($m); $i++) {
    if ($m[$i] % 2 == 0) {
        $suma += $m[$i];
        $kiekis++;
    }
}