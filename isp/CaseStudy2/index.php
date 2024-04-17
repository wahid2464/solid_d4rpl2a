<?php

include_once('FlagshipPrinter.php');
include_once('EntryLevelPrinter.php');
include_once('MidRangePrinter.php');

$flagshipPrinter = new FlagshipPrinter();
$flagshipPrinter->printDocument();
$flagshipPrinter->receiveFax();
$flagshipPrinter->scanDocument();

$entryLevelPrinter = new EntryLevelPrinter();
$entryLevelPrinter->printDocument();

$midRangePrinter = new MidRangePrinter();
$midRangePrinter->printDocument();
$midRangePrinter->scanDocument();