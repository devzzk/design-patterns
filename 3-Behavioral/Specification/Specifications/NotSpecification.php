<?php

namespace Behavioral\Specification\Specifications;

use Behavioral\Specification\Interfaces\Specification;
use Behavioral\Specification\Item;

class NotSpecification implements Specification
{
    public function __construct(private Specification $specification)
    {
    }

    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}