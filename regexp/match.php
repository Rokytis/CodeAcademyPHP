<?php

$s = 'labas rytas';
if (preg_match('/labas/', $s)) echo 'labas surastas<br>'; // iesko ar yra zodis labas
if (preg_match('/laba./', $s)) echo 'labas surasta<br>'; // taskas reiskia bet koki simboli, tai rado
if (preg_match('/\s+r/', $s)) echo 'r surastas<br>'; // \s - reiskia white space (bet koks tarpas). r - 1 iki +begalybes
if (preg_match('/\s{10}r/', $s)) echo 'r surastas<br>'; // nerado, nes tik 1 tarpas, o turi buti nemaziau 10
if (preg_match('/aaa|ry/', $s)) echo 'aaa arba ry surastas<br>'; // vertikalus bruksnys alternatyva, tai rado 'ry'
if (preg_match('/^\s*labas/', $s)) echo 'labas surastas<br>'; // ar teksto pradzioj yra labas ir pradzioj nebutu tarpu ar zodziu
$d = "2018-05-15";
if (preg_match("/^\d{4}-[0-9]{1,2}-\d{1,2}$/", $d))
    echo "data {$d} yra teisinga<br>"; // ar data teisinga
$n = '5.15';
if (preg_match("/^\d+((\.|.)\d{1,2}){0,1}$/", $n))
    echo "skaicius {$n} yra teisingas";




