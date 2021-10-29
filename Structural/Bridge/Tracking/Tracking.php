<?php


namespace Structural\Bridge\Tracking;

class Tracking
{
    private bool $trip_is_started = false;
    private bool $trip_is_ended = false;
    private array $trip_points = [];

    public function beginTrip()
    {
        $this->trip_is_started = true;
    }

    public function endTrip()
    {
        $this->trip_is_ended = true;
    }

    public function setTripPoint($lat, $lng)
    {
        $position = new \stdClass();
        $position->lat = $lat;
        $position->lng = $lng;
        array_push($this->trip_points, $position);
    }

    public function getTripReport()
    {
        if ($this->validation()) {
            return $this->validation();
        }
        $report = '<table><tr><th>lat</th><th>lng</th></tr>';
        foreach ($this->trip_points as $point) {
            $report .= '<tr><td>'.$point->lat.'</td><td>'.$point->lng.'</td></tr>';
        }
        $report .= '</table>';
        return $report;
    }

    public function validation()
    {
        if (!$this->trip_is_started) {
            return 'the trip not started';
        }
        if (!$this->trip_is_ended) {
            return 'the trip not ended';
        }
        return false;
    }

}
