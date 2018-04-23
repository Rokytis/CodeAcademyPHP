<?php

class a {
    static function y(){
        echo 'labas<br>';
    }
    static function f(){
        //echo a::y();
        echo self::y();
    }
}

a::f();