<?php

require_once 'Vehicle.php';


abstract class HighWay
{
    protected $currentVehicles = [];

    protected $nbLane;

    protected $maxSpeed;

    abstract public function addVehicle(Vehicle $Vehicle) : void;

    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles) : void
    {
        $this->currentVehicles= $currentVehicles;
    }

    public function setNbLane(int $nbLane) : void
    {
        $this->nbLane = $nbLane;
    }
    public function getNbLane(): int
    {
        return $this->nbLane ;
    }
    public function setMaxSpeed(int $maxSpeed) : void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}