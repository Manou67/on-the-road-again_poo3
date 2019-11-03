<?php

require_once 'Vehicle.php';

class Bike extends Vehicle
{
    public function __construct(string $color)
    {
        $this->color = $color;
    }
}