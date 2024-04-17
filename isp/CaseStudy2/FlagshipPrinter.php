<?php

include_once('FaxPrinter.php');
include_once('ScanPrinter.php');

class FlagshipPrinter implements FaxPrinter, ScanPrinter
{
    public function printDocument(): void {
        echo "Mencetak dokumen...<br/>";
    }

    public function receiveFax(): void {
        echo "Menerima faks...<br/>";
    }

    public function scanDocument(): void {
        echo "Memindai dokumen...<br/>";
    }
}