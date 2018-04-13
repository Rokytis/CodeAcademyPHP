<?php


$m = [1, 2, 6, 8, 7];
$suma = 0;
$kiekis = 0;

/*                                           // foreach
foreach($m as $sk){
    if ($sk % 2 == 0) {     //jei nera liekanos dalinant is 2 tai lyg
        $suma += $sk; // $suma = $suma + $lyg
        $kiekis++;   // kieki apskaiciuoja
    }
}
echo "Lyginiu suma: " . $suma . '<br>';
echo "Kiekis: " . $kiekis . '<br>';
echo "Lyginiu vidurkis: " . $suma/$kiekis;
*/

/*                                            // for
 for ($i = 0; $i < count($m); $i++) {
    if ($m[$i] % 2 == 0) {
        $suma += $m[$i];
        $kiekis++;
    }
}
echo "Lyginiu suma: " . $suma . '<br>';
echo "Lyginiu vidurkis: " . $suma/ $kiekis++;
*/

$i = 0;                                   // while
while ($i < count($m)) {
    if ($m[$i] % 2 == 0) {
        $suma += $m[$i];
        $kiekis++;
    }
    $i++;
}
echo "Lyginiu suma: " . $suma . '<br>';
echo "Lyginiu vidurkis: " . $suma/ $kiekis++;