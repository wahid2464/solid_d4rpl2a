<?php

include_once('Mobil.php');
include_once('MobilListrik.php');

$mobil = new Mobil();
$mobil->menggunakanBahanBakar('BBM');
$mobil->menggunakanBBM();

$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBahanBakar('listrik');
$mobilListrik->menggunakanBaterai();