<?php

include_once 'Persegi.php';
include_once 'PenghitungPersegi.php';

$persegi = new Persegi(8);
$penghitungPersegi = new PenghitungPersegi($persegi);

echo "Luas persegi: " . $penghitungPersegi->hitungLuas();