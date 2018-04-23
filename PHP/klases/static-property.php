<?php

class a {
   static public $id = 0;
 //  public $id = 0;
    // function __construct(){ // toks pat parasymas
    function a(){
     self::$id++;
   //  $this->id++;
    }
    function getID(){
        echo self::$id . '<br>';
    }
}

$o = new a(); $o->getID();
$o = new a(); $o->getID();
$o = new a(); $o->getID();
$o = new a(); $o->getID();
$o = new a(); $o->getID();
$o = new a(); $o->getID();