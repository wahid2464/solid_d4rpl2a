<?php

include_once('KendaraanBBM.php');

class Mobil extends KendaraanBBM {
    public function menggunakanBBM() {
        echo "Mobil ini menggunakan bahan bakar.<br/>";
    }
}