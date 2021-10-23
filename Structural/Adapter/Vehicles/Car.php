<?php

namespace Structural\Adapter\Vehicles;

class Car extends VehicleAbstract
{
    public function accelerate()
    {
        return 'car is moving';
    }

    public function pushBreak()
    {
        return 'car is stopped';
    }

    public function bellSound()
    {
        return 'car make a bell';
    }
}
