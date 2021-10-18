<?php

namespace Creational\Factory;

abstract class PaymentTypeEnum
{
    const CREDIT = 'credit';
    const DEBIT  = 'debit';
    const PAYPAL = 'paypal';
}
