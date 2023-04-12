<?php

namespace Creational\Prototype;

class BarBookPrototype extends Abstracts\BookPrototype
{
    protected string $category = 'Bar';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}