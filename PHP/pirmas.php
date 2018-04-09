<?php
$abc = 2; // cia yra kintamasis
/* cia yra isvedimas i browser langa */
echo $abc . ' PHP FUN ' . '<br>';

$b = 5;
echo $b . '<br>';

$c = $abc + $b;
echo $c . '<br>';

$d = $abc * $b;
echo $d . '<br>';

echo $d / 3;
echo '<br>';
echo 10 % 3; // liekana
echo '<br>';
echo 5 ** 2; // kelimas laipsniu
echo '<br>';

$x = 1;
$x += 2;
echo $x;  // 1 + 2 = 3

$x++;
echo '<br>';
echo $x;      // prideda 1

$x--;
echo '<br>';
echo $x;      // atima 1

$z = ++$x;
echo '<br>';
echo $z;       // prideda 1

$n = $x++;
echo '<br>';
echo $n;         // padaro kaip buvo

echo '<br>';
echo 1.2e-2 . ' <br> '; // 1.2 * 10^(-2)
echo 1.2e2 . ' <br> '; // 1.2 * 10^2
echo 'abcdef<br>';
echo "abcdef<br>";
echo "\x61";      // ascii simbolis

$a1 = 'labas';
$b1 = 'rytas';
echo '<br>';
echo $a1 . '  &nbsp; &nbsp; &nbsp; ' . $b1;

echo '<br>';
echo 'xxx=$z';
echo '<br>';
echo "xxx=$z";
echo '<br>';
echo "xxx={$z}";