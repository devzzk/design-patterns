<?php

namespace Tests\Creational;

use Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingleTonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}