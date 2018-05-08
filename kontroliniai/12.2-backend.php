<?php
/*
Sukurkite HTML dokumentą su įvedimo formą. Forma turėtu turėti laukus : 3x tekstiniai laukai: Šalies pavadinimas, sostinės pavadinimas, gyventojų skaičius, 1x radio pasirinkimas: Šalies tipas vakarų, rytų. Forma turėtu būti nusiųsta į 12.2-backend.php failą metodu POST. Duomenis patalpinkite į duomenų bazę. Duomenų bazės turinį atvaizduoti lentele (pirmas tris didžiausias šalis). Backend'e įdėti nuorodą gražinimui į formą.
 */

class forma {
    private $cnn; // duomenu bazes konektorius, padaromas per konstruktorių
    function __construct($srv, $dbn, $uid, $psw) { // konstruktorius
        $this->cnn = new PDO("mysql:host={$srv};dbname={$dbn}", $uid, $psw); // rysys su db atidaromas
        $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
    }
     function add(){ // papildyti asmenų masyvą
         $res = $this->cnn->prepare("insert into salis (Salies_pav, Sostines_pav, Gyventoju_sk, Salies_tipas) values (:pav, :sos, :sk, :tipas)");
         $res->execute([':pav' => $_POST['pav'], ':sos' => $_POST['sos'], ':sk' => $_POST['sk'], ':tipas' => $_POST['tipas']]); // istatom reiksmes
    }
    function info(){ // asmenų masyvo atvaizdavimas lentele
        $res = $this->cnn->query("select * from salis order by Gyventoju_sk desc limit 3"); // desc rusiuoja nuo didziausio. asc - maziausio
        echo '<table>';
        while ($row = $res->fetch()) { // imti po vieną asmenį iš masyvo ir atvaizduoti lentele
            echo '<tr>';
            echo '<td>' . $row['Salies_pav'] . '</td>';
            echo '<td>' . $row['Sostines_pav'] . '</td>';
            echo '<td>' . $row['Gyventoju_sk'] . '</td>';
            echo '<td>' . $row['Salies_tipas'] . '</td>';
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
    echo $e->getLine() . ' '  . $e->getMessage();
}
echo '<a href="12.2-frontend.html">Atgal</a>';