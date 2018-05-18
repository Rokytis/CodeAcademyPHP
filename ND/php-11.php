<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyti 4 kintamieji ir ekrane būtų išvestas tų kintamųjų sumos kvadratinė šaknis.
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
$sum = $a + $b + $c + $d;
echo 'Suma: ' . $sum . '<br>';
$saknis = sqrt($sum);
echo 'Saknis:  ' . $saknis . '<br>';