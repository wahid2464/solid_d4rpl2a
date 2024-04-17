<?php

class DBMSConnection{
    private $koneksi;

    public function __construct(Koneksi $koneksi){
        $this->koneksi = $koneksi;
    }

    public function lakukanOperasiDatabase() {
        echo "Melakukan Operasi Database..............." . "<br>";
    }
}