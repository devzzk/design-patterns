<?php

namespace Behavioral\Specification\Interfaces;

use Behavioral\Specification\Item;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}