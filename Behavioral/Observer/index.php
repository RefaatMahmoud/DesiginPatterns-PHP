<?php

use Behavioral\Observer\Course;
use Behavioral\Observer\Student;

require_once __DIR__.'/../../vendor/autoload.php';

$course = new Course('php');

$refaat = new Student('Refaat');
$mina = new Student('Mina');
$hazem = new Student('Hazem');

//subscribe
$course->attach($refaat);
$course->attach($hazem);
$course->attach($mina);

//$course->detach($refaat); //unsubscribe

$course->setAvailable(true);
//$course->setAvailable(false);

echo $refaat->getState().'<br>';
echo $mina->getState().'<br>';
echo $hazem->getState().'<br>';

