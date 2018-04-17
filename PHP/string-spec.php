<?php

$s = "<strong>abc</strong>"; // strong uzboldina teksta
    echo $s . "<br>";
    echo htmlspecialchars($s) . '<br>'; // visas teksta atvaizdavo
    echo htmlspecialchars_decode ($s) . '<br>'; // dekodavo
