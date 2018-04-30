<?php

//basename
echo basename('tekstai/tekstas.txt') . '<br>';
//copy
copy('tekstai/tekstas.txt', 'tekstai/tekstas-copy.txt'); //sukure tekstas-copy.txt
echo 'failas nukopijuotas<br>';
rename('tekstai/tekstas-copy.txt','tekstai/tekstas2.txt');
//pakeite tekstas-copy.txt i tekstas2.txt
echo 'failas pervadintas<br>';