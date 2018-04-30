<?php

$ff = fopen('tekstai/tekstas.txt', 'a'); // a - papildo
$s = 'Štai ir aš ';  //irasys Labas rytas i tekstas.txt
fwrite($ff, $s);
fclose($ff);
echo 'ok';
