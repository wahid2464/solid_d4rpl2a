<?php

class PembayaranCustomer{
    private $pembayaran;

    public function __construct(Pembayaran $pembayaran) {
        $this->pembayaran = $pembayaran;
    }

    public function lakukanPembayaran($nominal) {
        $this->pembayaran->prosesPembayaran($nominal);
    }
}