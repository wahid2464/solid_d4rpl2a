<?php

include_once('Printer.php');

interface FaxPrinter extends Printer {
    public function receiveFax(): void;
}