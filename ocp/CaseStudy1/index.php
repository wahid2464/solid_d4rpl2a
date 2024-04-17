<?php

require_once 'Pembayaran.php';
require_once 'PembayaranDebit.php';
require_once 'PembayaranKredit.php';
require_once 'PembayaranCash.php';
require_once 'PembayaranCustomer.php';

$tipePembayaran = "debit";

if ($tipePembayaran == "debit") {
    $pembayaran = new PembayaranDebit();
} elseif ($tipePembayaran == "kredit") {
    $pembayaran = new PembayaranKredit();
} else {
    $pembayaran = new PembayaranCash();
}

$pembayaranCustomer = new PembayaranCustomer($pembayaran);
$pembayaranCustomer->lakukanPembayaran(100000);