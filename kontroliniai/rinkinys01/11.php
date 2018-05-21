<?php
/**
Sukurkite HTML dokumenta su įvedimo forma. Forma turėtu turėti laukus: 3x tekstiniai laukai:  dviračio gamintojas, dviračio modelis, dviračio kaina, 1x radio pasirinkimas (paskirtis): moteriškas, vyriškas, sportinis. Forma turi būti nusiųsta į backend PHP failą metodu POST. Backend faile  pridėkite įrašą į sesiją ir redirektinkite vartotoją atgal į įvedimo formos HTML dokumentą.
 */
session_start();
$_SESSION['dviratis'][] = $_POST;
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
        foreach ($_SESSION['dviratis'] as $a) {
            echo '<tr>';
            echo '<td>' . 'Gamintojas: ' . $a['gam'] . '</td>';
            echo '<td>' . 'Modelis: ' . $a['mod'] . '</td>';
            echo '<td>' . 'Kaina (eurais): ' . $a['kai'] . '</td>';
            echo '<td>' . 'Paskirtis: ' . $a['Paskirtis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<a href="11.html">Atgal</a>';
    }
}
$o = new forma();
$o->add();
$o->info();