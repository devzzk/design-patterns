<?php

namespace Tests\Creational;

use Creational\StaticFactory\Formatters\StringFormatter;
use PHPUnit\Framework\TestCase;
use Creational\StaticFactory\StaticFactory;
use Creational\StaticFactory\Formatters\NumberFormatter;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(NumberFormatter::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(StringFormatter::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}