<?php
require_once 'Vehicle.php';
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected $nbLane = 4;

    protected $maxSpeed = 130;


    public function addVehicle(Vehicle $vehicle) : void
    {
        if ($vehicle instanceof Car) {
            $vehicles = $this->getCurrentVehicles();
            $vehicles[] = $vehicle;
            $this->setCurrentVehicles($vehicles);
            echo "Votre véhicule est autorisé à rouler sur la MotorWay.";
        } else {
            echo "<h3 style='color:red'>Votre véhicule est interdit sur la MotorWay, quittez immédiatement la route !!!</h3>";
        }
    }
}

