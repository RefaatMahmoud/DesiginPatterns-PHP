<?php

namespace Structural;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Vehicles\Car;
use Structural\Adapter\Vehicles\Plane\Plane;
use Structural\Adapter\Vehicles\Plane\PlaneAdapter;
use Structural\Adapter\Vehicles\VehicleAbstract;

final class AdapterTest extends TestCase
{
    public function testCarVehicle()
    {
        $car = new Car();
        $this->assertEquals($this->clientCodeUseVehicle($car), $car->useVehicle());
    }

    public function testPlaneVehicle()
    {
        $plane_adapter = new PlaneAdapter(new Plane());
        $this->assertEquals($this->clientCodeUseVehicle($plane_adapter), $plane_adapter->useVehicle());
    }

    public function clientCodeUseVehicle(VehicleAbstract $vehicle)
    {
        return $vehicle->accelerate().' * '.$vehicle->pushBreak().' * '.$vehicle->bellSound();
    }
}
