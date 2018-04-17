
<?php

$m = ['BMW', 'Audi', 'Honda', 'Hyundai', 'Volvo', 'VW','Mazda', 'Skoda', 'Fiat', 'Citroen'];

var_dump($m);

$trumpiausias = '';
$zodzioIlgis = 100;
for ($i = 0; $i < count($m); $i++) {
    if (strlen($m[$i]) < $zodzioIlgis) {
        $trumpiausias = $m[$i];
        $zodzioIlgis = strlen($m[$i]);
    }
}
echo 'Trumpiausias zodis: ' . $trumpiausias;
echo '<br>';
