<?php

class KoneksiMongoDB extends Koneksi {
    private $connectionString;

    public function __construct($connectionString) {
        $this->connectionString = $connectionString;
    }

    public function connect() {
        echo "Mencoba koneksi ke MongoDB dengan connection string: " . $this->connectionString . "<br>";
        echo "Koneksi berhasil!" . "<br>";
    }
}