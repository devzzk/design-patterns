<?php

namespace Creational\Prototype;

class FooBookPrototype extends Abstracts\BookPrototype
{
    protected string $category = 'Foo';


    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}