<?php

class PembayaranKredit extends Pembayaran {
    public function prosesPembayaran($nominal) {
        echo "Memproses pembayaran kredit dengan nominal: Rp" . $nominal . "<br>";
    }
}