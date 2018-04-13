<?php

function kv($skaicius){
    echo $skaicius ** 2;   // keliam kvadratu
}
echo "Kvadratu:" . '<br>';
kv(5);   // pakele kvadratu
echo '<br>';
kv(6);
echo '<br>';
kv(7);
echo '<br>';

echo "Daugyba:" . '<br>';
//global $t;              // butina global
// $t = 2;
function daug($a, $b){
//    global $t;           // butina global
    return $a * $b;      // daugyba    // kai global gali *$t
};
$t = 1;                              // kitas variantas
$daug = function ($a, $b) use($t){    // kad $t prirasyt
        return $a * $b * $t;      // daugyba
};
echo daug(2, 2) . '<br>';
$x = daug(5, 6);
echo $x . '<br>';

//unset($x);        //  panaikinam
//echo $x;          //  $x

$x = 3; $y = 4;
echo daug($x, $y) . '<br>';
$x = 7; $y = 5;
echo daug($x, $y) . '<br>';
echo $daug(2, 3) . '<br>';

$q = 'daug';
echo $q(3, 3) . '<br>';