<?php

$s = 'laBas rYTas kaUNas vILniuS';
echo $s;
$m = explode(' ', $s);   // padaro is teksto masyva
var_dump($m);
// for ($i=0; $i<count($m); $i++){
   /* $e = $m[$i];
    $e = strtolower($e);
    $e = ucfirst($e);
    $m[$i] = $e;             // 1 budas: paraso didziaja raide
   */
//   $m[$i] = ucfirst(strtolower($m[$i])); // 2 budas:
                                        // paraso didziaja raide
//}

$m2 = array_map(function($e){
    return ucfirst(strtolower($e)); // 3 budas:  paraso didziaja raide
}, $m);

$s2 = implode(', ', $m2);   // is masyvo padaro teksta
echo $s2;
