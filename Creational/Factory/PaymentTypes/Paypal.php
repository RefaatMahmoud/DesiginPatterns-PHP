<?php

namespace Creational\Factory\PaymentTypes;

class Paypal implements PaymentInterface
{
    public function pay(): string
    {
        return 'paid using paypal';
    }
}
