<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

try { // klaidas randa
    $cnn = new PDO('mysql:host=localhost;dbname=rokas', 'rokas', 'IsmokKodint333'); // rysys su db atidaromas
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions

    $res = $cnn->prepare("update aut set aut_metai=?, aut_modelis=? where aut_id=?"); //updatina
    $res->execute(['2010', 'Fabia', 8]);
    echo 'ok';

}
catch(PDOException $e) {
    echo $e->getMessage(); //klaidas randa
}