<?php

namespace Structural\Adapter\Vehicles\Plane;

interface PlaneInterface
{
    public function takeOff();

    public function landing();

    public function makeAlert();
}
