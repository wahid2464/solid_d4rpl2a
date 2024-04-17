<?php

include_once('Kendaraan.php');

class KendaraanListrik extends Kendaraan {
    public function menggunakanBaterai() {
        echo "Kendaraan listrik ini menggunakan baterai.<br/>";
    }
}