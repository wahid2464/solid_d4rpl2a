<?php

include_once('Shape2D.php');

class Square implements Shape2D
{
    private $sideLength;

    public function __construct(float $sideLength) {
        $this->sideLength = $sideLength;
    }

    public function calculateArea(): float {
        return $this->sideLength * $this->sideLength;
    }
}