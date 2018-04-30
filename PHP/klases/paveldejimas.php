<?php

class a {
    public $title = 'abc'; //private - neleidzia paveldet
    //protected - leidia paveldet
    /* final */ function f(){       //final uzdraudzia perrasyti
    echo $this->title . '<br>';
}
}
$o = new a();
$o->f();

class b extends a {
    function f(){
        echo $this->title . '(perrasytas)<br>';
    }
    function g(){
        echo 'Labas<br>';
    }
    function h(){
        parent::f(); //pakviecia funkcija dar aukstesne uz g, tai
    }               // yra f
}

$o = new b();
$o->f();
$o->g();
$o->h();