<?php

require_once('Shape2D.php');
require_once('Shape3D.php');

class Cube implements Shape2D, Shape3D
{
    private $sideLength;

    public function __construct(float $sideLength) {
        $this->sideLength = $sideLength;
    }

    public function calculateArea(): float {
        return 6 * ($this->sideLength * $this->sideLength);
    }

    public function calculateVolume(): float {
        return $this->sideLength * $this->sideLength * $this->sideLength;
    }
}