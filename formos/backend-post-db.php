<?php

class forma {
    private $cnn; // duomenu bazes konektorius, padaromas per konstruktorių
    function __construct($srv, $dbn, $uid, $psw) { // konstruktorius
        $this->cnn = new PDO("mysql:host={$srv};dbname={$dbn}", $uid, $psw); // rysys su db atidaromas
        $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
    }
     function add(){ // papildyti asmenų masyvą
         $res = $this->cnn->prepare("insert into aaa (aaa_vardas, aaa_lytis) values (:vardas, :lytis)");
         $res->execute(['vardas' => $_POST['vardas'], ':lytis' => $_POST['lytis']]); // istatom reiksmes
    }
    function info(){ // asmenų masyvo atvaizdavimas lentele
        $res = $this->cnn->query("select * from aaa order by aaa_id");
        echo '<table>';
        while ($row = $res->fetch()) { // imti po vieną asmenį iš masyvo ir atvaizduoti lentele
            echo '<tr>';
            echo '<td>' . $row['aaa_vardas'] . '</td>';
            echo '<td>' . $row['aaa_lytis'] . '</td>';
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
echo '<a href="frontend-post-file.html">Atgal</a>';