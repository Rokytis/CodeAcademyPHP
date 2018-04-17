<?php

date_default_timezone_set("Europe/Vilnius"); //timezone
$s = date("Y-m-d H:m:s");  //laika rodo
echo $s . '<br>';
$s = date("m/d/y H:m:s");  //laika rodo amerikietiskai
echo $s . '<br>';
$s = date("Y");  // rodo metus
echo $s;
