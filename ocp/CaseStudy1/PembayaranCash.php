<?php

class PembayaranCash extends Pembayaran {
    public function prosesPembayaran($nominal) {
        // Simulasikan proses pembayaran tunai
        echo "Memproses pembayaran tunai dengan nominal: Rp" . $nominal . "<br>";
    }
}