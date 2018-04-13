<?php



$suma = 0;
$kiekis = 0;
$m = [1, 2, 6, 8, 9];
foreach($m as $sk){
    if ($sk % 2 == 0) {     //jei nera liekanos dalinant is 2 tai lyg
        $suma += $sk; // $suma = $suma + $lyg
        $kiekis++;   // kieki apskaiciuoja
    }
}
echo "Suma: " . $suma . '<br>';
echo "Kiekis: " . $kiekis . '<br>';
echo "Vidurkis: " . $suma/$kiekis;
