<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyti 5 kintamieji ir ekrane būtų išvestas tų kintamųjų sandaugos su PI konstanta aritmetinis vidurkis.
 */
echo 'Kintamieji:' . '<br>';
$a = 1;
echo $a . '<br>';
$b = 2;
echo $b . '<br>';
$c = 3;
echo $c . '<br>';
$d = 4;
echo $d . '<br>';
$e = 5;
echo $e . '<br>';
$x = ($a*pi() + $b*pi() + $c*pi() + $d*pi() + $e*pi())/5;
echo 'Atsakymas: ' . $x . '<br>';
