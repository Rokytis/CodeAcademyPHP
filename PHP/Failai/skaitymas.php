<?php

$ff = fopen('tekstai/tekstas.txt', 'r'); // r - skaitynas
$s = fread($ff, filesize('tekstai/tekstas.txt'));
fclose($ff);
echo $s; // roodo kas tekstas.txt parasyta
