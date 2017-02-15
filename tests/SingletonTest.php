<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use patterns\creational\singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testCanCreate()
    {
        $single = Singleton::GetInstance();

        $this->assertNotNull($single);
    }

    public function testReturnTheSameInstance()
    {
        $single1 = Singleton::GetInstance();
        $single2 = Singleton::GetInstance();

        $this->assertEquals($single1, $single2);
        $this->assertEquals($single1->getHash(), $single2->getHash());

        $single1->setProperty(1001);
        $this->assertEquals($single1->getProperty(), $single2->getProperty());
    }
}
?>
