<?php

namespace Behavioral\Specification\Specifications;

use Behavioral\Specification\Interfaces\Specification;
use Behavioral\Specification\Item;
use JetBrains\PhpStorm\Pure;

class PriceSpecification implements Specification
{
    public function __construct(private ?float $minPrice, private ?float $maxPrice)
    {
    }

    #[Pure] public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}