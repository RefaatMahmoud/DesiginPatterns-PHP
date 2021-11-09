<?php

use Structural\Facade\Report\ReportFacade;

require_once __DIR__.'/../../../vendor/autoload.php';

$data = [
    'header' => 'Hello Header .',
    'body'   => 'Report Body Bla Bla .',
    'footer' => 'Footer .',
];
$report = ReportFacade::render($data);
echo $report;
