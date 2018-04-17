<?php

$s = "%s yra %s studentas<br>";

echo sprintf($s, 'Jonas', 'KTU');
echo sprintf($s, 'Petras', 'VDU');
echo sprintf($s, 'Antanas', 'CodeAcademy'); //sudejo tekstus

for ($i=0; $i<20; $i++){
    echo sprintf("%04d", $i) . '<br>'; //suraso skaicius is eiles
}