<?php

$d = date("Y-m-d H:m:s"); //data
echo $d.'<br>';
echo uniqid().'<br>'; //random simboliai

$ad = preg_replace("/^(\d{4})-(\d{2})-(\d{2}) (.+)$/", '$2/$3/$1 $4', $d);
echo $ad; // pakeiciam i amerikietiska datos formata
