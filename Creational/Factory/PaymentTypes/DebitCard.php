<?php

namespace Creational\Factory\PaymentTypes;

class DebitCard implements PaymentInterface
{
    public function pay(): string
    {
        return 'paid using debit card';
    }
}
