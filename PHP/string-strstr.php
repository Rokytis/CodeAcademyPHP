<?php

$s = 'Labas rytas';

echo strstr($s, 'bas') . '<br>'; // nuo ...bas parase zodzius
echo strpos($s, 'rytas') . '<br>'; // pozicija paraso

$string = "This is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}

$s = " Labas ";
echo "'" . $s . "'" . '<br>';  // uzdejo tarpus
echo "'" . trim($s) . "'" . '<br>'; //nutryne tarpus
echo "'" . ltrim($s) . "'" . '<br>'; // kairi tarpa istryne
echo "'" . rtrim($s) . "'" . '<br>'; // desini tarpa istryne

$x = "Ąžuolas";
echo strlen($x) . '<br>'; //parase 9 smb, o ne 7, nes lt raides po du baitus
echo mb_strlen($x, 'utf-8') . '<br>'; // su multibyte
                                             // skaiciuoja

