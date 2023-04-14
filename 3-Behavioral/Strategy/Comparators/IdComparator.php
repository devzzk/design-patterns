<?php

namespace Behavioral\Strategy\Comparators;

use Behavioral\Strategy\Interfaces\Comparator;

class IdComparator implements Comparator
{

    /**
     * @inheritDoc
     */
    public function compare(mixed $a, mixed $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}