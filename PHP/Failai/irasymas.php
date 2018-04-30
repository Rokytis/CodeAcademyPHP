<?php

$ff = fopen('tekstai/tekstas.txt', 'w'); // ka atidaro
$s = 'Labas rytas ';  //irasys Labas rytas i tekstas.txt
fwrite($ff, $s);
fclose($ff);
echo 'ok';
