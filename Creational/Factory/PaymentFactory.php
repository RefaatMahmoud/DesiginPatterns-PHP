<?php

namespace Creational\Factory;

use Creational\Factory\PaymentTypes\CreditCard;
use Creational\Factory\PaymentTypes\DebitCard;
use Creational\Factory\PaymentTypes\Paypal;

class PaymentFactory
{
    /**
     * @throws \Exception
     */
    public function initializePayment($type)
    {
        switch ($type) {
            case PaymentTypeEnum::CREDIT:
                return new CreditCard();
            case PaymentTypeEnum::DEBIT:
                return new DebitCard();
            case PaymentTypeEnum::PAYPAL:
                return new Paypal();
        }
       throw new \Exception('un supported payment method');
    }
}
