<?php

session_start();
//var_dump($_SESSION); //visus formoje sukaupia Petras, Jonas...

//session_unset();   //jei nori panaikint formoje buvusius
//session_destroy(); //jei nori panaikint formoje buvusius

class preforma
{
    function add()
    {
        $_SESSION['sarasas'][] = $_POST;
    }
}
class forma extends preforma {
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
$o = new forma();
$o->add();
$o->info();