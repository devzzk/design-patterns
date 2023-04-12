<?php

namespace Tests\Creational;

use Creational\Prototype\BarBookPrototype;
use Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{

    public function testCanGetFooBook()
    {
        $fooBookPrototype = new FooBookPrototype();
        $barBookPrototype = new BarBookPrototype();

        for ($i = 0; $i < 3; $i++) {
            $book = clone $fooBookPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 2; $i++) {
            $book = clone $barBookPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}