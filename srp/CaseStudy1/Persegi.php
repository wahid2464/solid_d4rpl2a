<?php
class Persegi
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function getSisi()
    {
        return $this->sisi;
    }

    public function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}