<?php declare(strict_types=1);

namespace Creational;

use Creational\Factory\PaymentFactory;
use Creational\Factory\PaymentTypeEnum;
use Creational\Factory\PaymentTypes\CreditCard;
use Creational\Factory\PaymentTypes\Paypal;
use Creational\Singleton\ConnectDB;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
    public function testConnectDBSingletonInstance()
    {
        $connection1 = ConnectDB::getInstance()->getConnection();
        $connection2 = ConnectDB::getInstance()->getConnection();
        $this->assertSame($connection1, $connection2);
    }

}
