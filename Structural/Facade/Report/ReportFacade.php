<?php


namespace Structural\Facade\Report;

use Structural\Facade\Report\Components\ReportBody;
use Structural\Facade\Report\Components\ReportFooter;
use Structural\Facade\Report\Components\ReportHeader;

class ReportFacade
{
    public static function render($data)
    {
        $header = (new ReportHeader($data['header']))->render();
        $body = (new ReportBody($data['body']))->render();
        $footer = (new ReportFooter($data['footer']))->render();
        return $header.$body.$footer;
    }
}
