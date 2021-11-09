<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Behavioral\State\OrderContext;

$orderContext = OrderContext::create();
echo $orderContext->toString() .'<br>';

$orderContext->proceedToNext();
echo $orderContext->toString().'<br>';

$orderContext->proceedToNext();
echo $orderContext->toString().'<br>';

