<?php

namespace Structural\Bridge\Vehicle;

class Car extends VehicleAbstract
{
    protected $type;
    protected $color;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  mixed  $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param  mixed  $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
}
