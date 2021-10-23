<?php declare(strict_types=1);

namespace Creational;

use Creational\Factory\PaymentFactory;
use Creational\Factory\PaymentTypeEnum;
use Creational\Factory\PaymentTypes\CreditCard;
use Creational\Factory\PaymentTypes\Paypal;
use PHPUnit\Framework\TestCase;

final class FactoryTest extends TestCase
{
    private PaymentFactory $payment_factory;

    public function setUp()
    {
        parent::setUp();
        $this->payment_factory = new PaymentFactory();
    }

    public function testPaymentTypeInstanceOfCredit()
    {
        $payment = $this->payment_factory->initializePayment(PaymentTypeEnum::CREDIT);
        $this->assertInstanceOf(CreditCard::class, $payment);
    }

    public function testPaymentTypeInstanceOfPaypal()
    {
        $payment = $this->payment_factory->initializePayment(PaymentTypeEnum::PAYPAL);
        $this->assertInstanceOf(Paypal::class, $payment);
    }

}
