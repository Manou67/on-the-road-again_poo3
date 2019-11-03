<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    public $shipment = 0; //chargement


    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        $this->storageCapacity = $storageCapacity;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }

    public function getShipment(): int
    {
        return $this->shipment;
    }

    public function setShipment(int $shipment): void
    {
        $this->shipment = $shipment;
    }

    public function isFullOrNot(): string
    {
        $sentence = "";
        if ($this->shipment >= $this->storageCapacity) {

                $sentence = 'Full !!!';
            } else {
                $sentence .='In filling...';
            }
        return $sentence;

    }
}