<?php

use Creational\Singleton\ConnectDB;

require_once __DIR__.'/../../vendor/autoload.php';

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);
