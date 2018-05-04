<?php

$ff = fopen('tekstai/tekstas.txt', 'a'); // a - papildo
$s = 'Štai ir aš ';  //irasys Stai ir as i tekstas.txt
fwrite($ff, $s);
fclose($ff);
echo 'ok';
