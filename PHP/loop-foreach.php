<?php

$m = [1, 4, 3, 7, 11];

foreach($m as $item){
    echo $item , 'tarpas'; //5 kartus tarpus idejo
}
echo '<br>';

$n = ['gamintojas' => 'Honda', 'modelis' => 'Civic', 'metai' => 2005];  // suraso gamintoja, modeli ir metus
foreach($n as $item){
    echo $item , ' ';
}
echo '<br>';
foreach($n as $key => $value){
    echo $key.': '.$value, ' ';
}