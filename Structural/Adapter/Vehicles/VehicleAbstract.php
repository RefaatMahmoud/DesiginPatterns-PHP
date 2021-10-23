<?php

namespace Structural\Adapter\Vehicles;

abstract class VehicleAbstract
{
    abstract public function accelerate();

    abstract public function pushBreak();

    abstract public function bellSound();

    public function useVehicle()
    {
        return $this->accelerate().' * '.$this->pushBreak().' * '.$this->bellSound();
    }
}
