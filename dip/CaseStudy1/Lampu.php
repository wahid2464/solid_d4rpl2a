<?php

class Lampu implements IKontrol {
    public function nyalakan(): void
    {
        echo "Lampu dinyalakan.<br/>";
    }

    public function matikan(): void
    {
        echo "Lampu dimatikan.<br/>";
    }
}