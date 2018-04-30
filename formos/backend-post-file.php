<?php

class forma {
    function __constuct($fn){
        $this->fn = $fn;
    }
    function add($fn){
        if (file_exists($this->fn)){
            $f = fopen($this->fn);
            $s =fread($f, filesize($this->fn));
            $m = json_decode($m);
            fclose($f);
        }
        $f = fopen($fn,'a');
        fwrite($f,json_encode($_POST));
        fclose($f);
    }
    else $ m = [];
    $
    function info(){
        echo '<table>';
        foreach ($_SESSION['sarasas'] as $asmuo) {
            echo '<tr>';
            echo '<td>' . $asmuo['vardas'] . '</td>';
            echo '<td>' . $asmuo['lytis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<a href="frontend-post-session.html">Atgal</a>';
    }
}
$o = new forma('asmenys.txt');
$o->add();
$o->info();