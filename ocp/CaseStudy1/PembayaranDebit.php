<?php

class PembayaranDebit extends Pembayaran {
    public function prosesPembayaran($nominal) {
        echo "Memproses pembayaran debit dengan nominal: Rp" . $nominal . "<br>";
    }
}