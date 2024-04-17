<?php

include_once('Printer.php');

interface ScanPrinter extends Printer {
    public function scanDocument(): void;
}