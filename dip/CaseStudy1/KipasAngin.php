<?php

class KipasAngin implements IKontrol {
    public function nyalakan(): void {
        echo "Kipas angin dinyalakan.<br/>";
    }

    public function matikan(): void {
        echo "Kipas angin dimatikan.<br/>";
    }
}