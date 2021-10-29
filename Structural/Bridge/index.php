<?php

use Structural\Bridge\Tracking\Tracking;
use Structural\Bridge\Vehicle\Car;
use Structural\Bridge\Vehicle\Enums\CarColorEnum;
use Structural\Bridge\Vehicle\Enums\CarTypeEnum;

require_once __DIR__.'/../../vendor/autoload.php';

$tracking = new Tracking();

//[Red Car]
$red_bmw = new Car($tracking);
$red_bmw->setColor(CarColorEnum::RED);
$red_bmw->setType(CarTypeEnum::BMW);
echo $red_bmw->getTripReport();

//[Blue Car]
$blue_bmw = new Car($tracking);
$blue_bmw->setColor(CarColorEnum::BLUE);
$blue_bmw->setType(CarTypeEnum::MERCEDES);
$blue_bmw->beginTrip();
$blue_bmw->setPoint('1999.555', '2000.45');
$blue_bmw->setPoint('3000.555', '3300.45');
$blue_bmw->endTrip();
echo $blue_bmw->getTripReport();
