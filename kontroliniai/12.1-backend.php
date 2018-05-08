<?php
/*
 Sukurti frontend (method=post) automobilio duomenų įvedimui: gamintojas, modelis, metai, kaina. Sukurti backend, kuri patalpintų automobilio duomenis į DB ir atvaizduotų lentele pirmu triju automobilių duomenis. Surūšiuoti pagal kainą.
 */

class forma {
    private $cnn; // duomenu bazes konektorius, padaromas per konstruktorių
    function __construct($srv, $dbn, $uid, $psw) { // konstruktorius
        $this->cnn = new PDO("mysql:host={$srv};dbname={$dbn}", $uid, $psw); // rysys su db atidaromas
        $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
    }
     function add(){ // papildyti asmenų masyvą
         $res = $this->cnn->prepare("insert into aut (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) values (:gam, :mod, :met, :kaina)");
         $res->execute([':gam' => $_POST['gam'], ':mod' => $_POST['mod'], ':met' => $_POST['metai'], ':kaina' => $_POST['kaina']]); // istatom reiksmes
    }
    function info(){ // asmenų masyvo atvaizdavimas lentele
        $res = $this->cnn->query("select * from aut order by aut_kaina limit 3"); // limit - riboja iki 3. Jei nera desc, tai nuo maziausio rusiuoja.
        echo '<table>';
        while ($row = $res->fetch()) { // imti po vieną asmenį iš masyvo ir atvaizduoti lentele
            echo '<tr>';
            echo '<td>' . $row['aut_gamintojas'] . '</td>';
            echo '<td>' . $row['aut_modelis'] . '</td>';
            echo '<td>' . $row['aut_metai'] . '</td>';
            echo '<td>' . $row['aut_kaina'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
try {
    $o = new forma('localhost', 'rokas', 'rokas', 'IsmokKodint333'); // susikurti klasės egzempliorių
    $o->add(); // įdėti asmens POST formos duomenis į masyvą (ir išsaugoti faile)
    $o->info(); // atvaizduoti asmenų sąrašą lentele
}
catch(PDOException $e) {
    echo $e->getMessage();
}
echo '<a href="12.1-frontend.html">Atgal</a>';