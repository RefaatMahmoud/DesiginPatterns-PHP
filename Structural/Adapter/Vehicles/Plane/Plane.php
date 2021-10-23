<?php

namespace Structural\Adapter\Vehicles\Plane;

class Plane implements PlaneInterface
{
    public function takeOff()
    {
        return 'plane is take off';
    }

    public function landing()
    {
        return 'plane is landing';
    }

    public function makeAlert()
    {
        return 'plane is alert';
    }
}
