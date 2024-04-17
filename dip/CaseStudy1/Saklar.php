<?php

include_once('IKontrol.php');

class Saklar {
    private $kontrol;

    public function __construct(IKontrol $kontrol) {
        $this->kontrol = $kontrol;
    }

    public function nyalakan(): void {
        $this->kontrol->nyalakan();
    }

    public function matikan(): void {
        $this->kontrol->matikan();
    }
}