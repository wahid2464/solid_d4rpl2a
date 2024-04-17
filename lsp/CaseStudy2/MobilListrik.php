<?php

include_once('KendaraanListrik.php');

class MobilListrik extends KendaraanListrik {
    public function menggunakanBaterai() {
        echo "Mobil listrik ini menggunakan baterai.<br/>";
    }
}