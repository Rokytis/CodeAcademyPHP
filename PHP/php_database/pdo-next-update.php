<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

try { // klaidas randa
    $cnn = new PDO('mysql:host=localhost;dbname=rokas', 'rokas', 'IsmokKodint333'); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->query("update aut set aut_metai='2010', aut_modelis='Fabia' where aut_id=6"); //updatina
    echo 'ok';

}
catch(PDOException $e) {
    echo $e->getMessage(); //klaidas randa
}