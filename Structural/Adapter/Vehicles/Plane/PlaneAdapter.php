<?php

namespace Structural\Adapter\Vehicles\Plane;

use Structural\Adapter\Vehicles\VehicleAbstract;

class PlaneAdapter extends VehicleAbstract
{
    private Plane $plane;

    public function __construct(Plane $plane)
    {
        $this->plane = $plane;
    }

    public function accelerate()
    {
        return $this->plane->takeOff();
    }

    public function pushBreak()
    {
        return $this->plane->takeOff();
    }

    public function bellSound()
    {
        return $this->plane->makeAlert();
    }

}
