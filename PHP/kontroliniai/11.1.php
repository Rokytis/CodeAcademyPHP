<?php
/**
Sukurti html failą su POST forma. Forma turi pateikti teleloto skaičių į backend. Backend php faile atsidaryti sesiją ir joje kaupti skaičius. Sukurti klasę skaičių kaupimui (metodas) ir atvaizdavimui lentele 5x5 (metodas). Backende įdėti nuorodą grįžimui į frontend formą.
 */

session_start();
$_SESSION['lentele'][] = $_POST;

class preforma
{
    function add()
    {
        $_SESSION['lentele'][] = $_POST;
    }
}
class forma extends preforma {
    function info(){
        echo '<table>';
        foreach ($_SESSION['lentele'] as $asmuo) {
            echo '<tr>';
            echo '<td>'$asmuo'</td>';
            echo '<td>'$asmuo'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<a href="11.1.html">Atgal</a>';
    }
}
$o = new forma();
$o->add();
$o->info();
