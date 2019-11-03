<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;

    protected $maxSpeed = 50;

        public function addVehicle(Vehicle $vehicle) : void
    {
        if ($vehicle instanceof Vehicle) {
            $vehicles = $this->getCurrentVehicles();
            $vehicles[] = $vehicle;
            $this->setCurrentVehicles($vehicles);
            echo "Votre véhicule est autorisé à rouler sur la ResidentialWay.";
        } else {
            echo "<h3>Votre véhicule est interdit sur la ResidentialWay, quittez immédiatement la route !!!</h3>";
        }
    }
}
