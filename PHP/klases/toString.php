<?php

class a {
    public $m = [1,2,3,4,5,6];
    function __toString(){
        //return json_encode($this->m);  // paraso kaip teksta
        return implode(', ', $this->m); //sudejo kablelius
    }
}

$o = new a();
echo $o;
