<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Creational\Factory\PaymentFactory;
use Creational\Factory\PaymentTypeEnum;

try {
    $payment_factory = new PaymentFactory();
    $payment = $payment_factory->initializePayment(PaymentTypeEnum::PAYPAL);
    print_r($payment);
} catch (Exception $e) {
    print_r($e->getMessage());
}
