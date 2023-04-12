<?php

namespace Creational\SimpleFactory;

use JetBrains\PhpStorm\Pure;

class SimpleFactory
{
    #[Pure]
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}