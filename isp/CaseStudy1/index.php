<?php

include_once('Square.php');
include_once('Cube.php');

$square = new Square(10);
echo "Luas persegi: " . $square->calculateArea() . "<br/>";

$cube = new Cube(16);
echo "Luas permukaan kubus: " . $cube->calculateArea() . "<br/>";
echo "Volume kubus: " . $cube->calculateVolume() . "<br/>";