<?php

include_once 'Mahasiswa.php';
include_once 'MahasiswaView.php';

$mahasiswa = new Mahasiswa("2205030", "Wahid");
$mahasiswaView = new MahasiswaView($mahasiswa);

$mahasiswaView->showMahasiswa();