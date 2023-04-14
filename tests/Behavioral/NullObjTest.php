<?php

namespace Tests\Behavioral;

use Behavioral\NullObj\Logger\NullLogger;
use Behavioral\NullObj\Logger\PrintLogger;
use Behavioral\NullObj\Service;
use PHPUnit\Framework\TestCase;

class NullObjTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in Behavioral\NullObj\Service::doSomething');
        $service->doSomething();
    }

}