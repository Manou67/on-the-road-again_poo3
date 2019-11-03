<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle) : void
    {
        if ($vehicle instanceof Bike or $vehicle instanceof Skateboard) {
            $vehicles = $this->getCurrentVehicles();
            $vehicles[] = $vehicle;
            $this->setCurrentVehicles($vehicles);
            echo "Votre véhicule est autorisé à rouler sur la PedestrianWay.";
        } else {
            echo "<h3 style='color:red'>Votre véhicule est interdit sur la PedestrianWay, quittez immédiatement la route !!!</h3>";
        }
    }
}