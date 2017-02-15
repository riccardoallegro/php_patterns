<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use patterns\creational\abstract_factory_method\ConcreteCreator;
use patterns\creational\abstract_factory_method\ConcreteProduct;

class AbstractFactoryMethodTest extends TestCase
{
    public function testOk()
    {
        $creator = new ConcreteCreator();
        $res = $creator->DoSomeWorkWithProduct();

        $this->assertEquals($res, ConcreteProduct::DO_WORK_STRING);
    }
}
