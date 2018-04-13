<?php

function getNo(){
  //  $n = 0;       // visur 1
    static $n = 0;  // vis prideda 1: 1,2,3,4,5,6
    $n++;
    return $n;     // reikia kad grazintu reiksme
}

echo  getNo() . '<br>';
echo  getNo() . '<br>';
echo  getNo() . '<br>';
echo  getNo() . '<br>';
echo  getNo() . '<br>';
echo  getNo() . '<br>';
