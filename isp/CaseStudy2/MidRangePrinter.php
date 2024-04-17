<?php

include_once('Printer.php');
include_once('ScanPrinter.php');

class MidRangePrinter implements Printer, ScanPrinter
{
    public function printDocument(): void {
        echo "Mencetak dokumen...<br/>";
    }

    public function scanDocument(): void  {
        echo "Memindai dokumen...<br/>";
    }
}