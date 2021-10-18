<?php

namespace Creational\Factory\PaymentTypes;

class CreditCard implements PaymentInterface
{
    public function pay() : string
    {
        return 'paid using credit card';
    }
}
