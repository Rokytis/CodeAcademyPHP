<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

try { // klaidas randa
    $cnn = new PDO('mysql:host=localhost;dbname=rokas', 'rokas', 'IsmokKodint333'); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->query("insert into aut (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) values ('Skoda', 'Octavia', '2010-01-01', 5000)"); //insertina
    echo 'ok';

}
catch(PDOException $e) {
    echo $e->getMessage(); //klaidas randa
}