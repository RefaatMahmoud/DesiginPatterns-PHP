<?php


namespace Structural\Facade\Report\Components;

class ReportBody implements ComponentInterface
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render() : string
    {
        return "<h4 style='color: black;font-weight: bold'>".$this->data."<h1>";
    }
}
