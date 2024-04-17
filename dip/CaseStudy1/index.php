<?php

include_once('Lampu.php');
include_once('KipasAngin.php');
include_once('Saklar.php');

$lampu = new Lampu();
$kipasAngin = new KipasAngin();

$saklarLampu = new Saklar($lampu);
$saklarLampu->nyalakan();
$saklarLampu->matikan();

$saklarKipasAngin = new Saklar($kipasAngin);
$saklarKipasAngin->nyalakan();
$saklarKipasAngin->matikan();