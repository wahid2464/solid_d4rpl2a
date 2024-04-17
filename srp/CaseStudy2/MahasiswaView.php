<?php

class MahasiswaView {
    private $mahasiswa;

    public function __construct(Mahasiswa $mahasiswa) {
        $this->mahasiswa = $mahasiswa;
    }

    public function showMahasiswa() {
        echo "NIM: " . $this->mahasiswa->getNim() . "<br>";
        echo "Nama: " . $this->mahasiswa->getNama() . "<br>";
    }
}