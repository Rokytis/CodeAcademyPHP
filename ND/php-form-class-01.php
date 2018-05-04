<?php
/**
Sukurti POST formą, kuri leistų įvesti svečio duomenis: vardas, pavardė, pasirinkti patiekalą. Sukurti formos PHP backend, kuri priimtų formos duomenis ir juos išvestų ekrane. Įdėti nuorodą į formą, kad būtų galima grįžti ir įvesti naują svečią. Backend suprogramuoti naudojant class.
 */
/*
var_dump($_POST);
echo '<a href="php-form-class-01.html">Atgal</a>';
*/               // jei nereikia kaupti skirtingu sveciu duomenis

//session_unset();   //jei nori panaikint formoje buvusius
session_start();
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
        foreach ($_SESSION['sarasas'] as $svec) {
            echo '<tr>';
            echo '<td>' . $svec['Vardas'] . '</td>';
            echo '<td>' . $svec['Pavarde'] . '</td>';
            echo '<td>' . $svec['Patiekalas'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<a href="php-form-class-01.html">Atgal</a>';
    }
}
$o = new forma();
$o->add();
$o->info();           // jei reikia kaupti skirtingiu sveciu duomenis. PATVARKYTI NEVEIKIA