<?php

include_once 'Koneksi.php';
include_once 'KoneksiMySQL.php';
include_once 'KoneksiMongoDB.php';
include_once 'DBMSConnection.php';

$tipeKoneksi = "mysql";

if ($tipeKoneksi == "mysql") {
    $koneksi = new KoneksiMySQL("localhost", "root", "", "db_ecommerce");
} elseif ($tipeKoneksi == "mongodb") {
    $koneksi = new KoneksiMongoDB("mongodb://localhost:27017");
} else {
    echo "Tipe koneksi tidak sesuai!!!" . "<br>";
    exit;
}

$dbms = new DBMSConnection($koneksi);
$dbms->lakukanOperasiDatabase();