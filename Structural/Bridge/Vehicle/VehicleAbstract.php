<?php


namespace Structural\Bridge\Vehicle;

use Structural\Bridge\Tracking\Tracking;

abstract class VehicleAbstract
{
    private Tracking $tracking;

    public function __construct(Tracking $tracking)
    {
        $this->tracking = $tracking;
    }

    public function beginTrip()
    {
        $this->tracking->beginTrip();
    }

    public function endTrip()
    {
        $this->tracking->endTrip();
    }

    public function setPoint($lat, $lng)
    {
        $this->tracking->setTripPoint($lat, $lng);
    }

    public function getTripReport()
    {
        return '<h2 style="color:'.$this->color.'">'.$this->type.'<h2>'.$this->tracking->getTripReport().'<hr>';
    }
}
