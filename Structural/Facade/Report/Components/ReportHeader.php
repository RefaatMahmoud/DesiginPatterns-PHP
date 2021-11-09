<?php


namespace Structural\Facade\Report\Components;

class ReportHeader implements ComponentInterface
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render(): string
    {
        return "<h3 style='color: blue;font-weight: bold'>".$this->data."<h1>";
    }
}
