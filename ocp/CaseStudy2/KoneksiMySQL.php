<?php

class KoneksiMySQL extends Koneksi
{
    private $hostname;
    private $username;
    private $password;
    private $database;

    public function __construct($hostname, $username, $password, $database) {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        echo "Mencoba koneksi ke MySQL dengan hostname: " . $this->hostname . "<br>";
        echo "Username: " . $this->username . "<br>";
        echo "Password: " . $this->password . "<br>";
        echo "Database: " . $this->database . "<br>";
        echo "Koneksi berhasil!" . "<br>";
    }
}