
<?php
/**
Sukurkite tekstų masyvą. Panaudodami for ciklą suraskite žodžius kuriuose yra simbolis "a" ir sudėkite juos į kitą (naują) masyvą.  Pademonstruokite rezultatą.
 */
$m = ['BMW', 'Audi', 'Honda', 'Hyundai', 'Volvo', 'VW','Mazda', 'Skoda', 'Fiat', 'Citroen'];

var_dump($m);

$a = 'a';
//$naujasmasyvas = [];
for ($i = 0; $i <count($m); $i++){
    if (strpos($m[$i], $a) !==false) {
        $naujasmasyvas[] = $m[$i];
    }
}
var_dump($naujasmasyvas);
