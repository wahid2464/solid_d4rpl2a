<?php

include_once 'Pembayaran.php';
include_once 'PembayaranDebit.php';
include_once 'PembayaranKredit.php';
include_once 'PembayaranCash.php';
include_once 'PembayaranCustomer.php';

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