<?php
/**
Sukurti skaičių masyvą, paversti masyvą tekstu, sujungiant elementus kableliu ir įrašyti į failą. Su teksto redaktoriumi papildyti failo turinį keletu naujų skaičių. Parašyti PHP skriptą, kuris nuskaito pakeistą failą, atstato iš jo masyvą. Išvesti masyvo turinį su var_dump.
 */
$m = [1,2,3,4,5];
var_dump($m);
$m1 = implode(', ', $m);   // is masyvo padaro teksta
echo 'Sukurto failo turinys:'. '<br>';
echo $m1 . '<br>';
file_put_contents('Failai/failas.txt', $m1);

$a = fopen('Failai/failas.txt', 'a'); // a - papildo
$papildymas = ', 6, 7, 8, 9, 10';  //papildys
fwrite($a, $papildymas);
fclose($a);

$naujas = file_get_contents('Failai/failas.txt'); // rodo kas failas.txt parasyta
echo 'Naujo failo turinys:'. '<br>';
echo $naujas . '<br>'; //isveda teksta
$naujas = explode(' ', $naujas);   // padaro is teksto masyva
var_dump($naujas);