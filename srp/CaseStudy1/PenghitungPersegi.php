<?php

class PenghitungPersegi
{
    private $persegi;

    public function __construct(Persegi $persegi)
    {
        $this->persegi = $persegi;
    }

    public function hitungLuas()
    {
        return $this->persegi->hitungLuas();
    }
}