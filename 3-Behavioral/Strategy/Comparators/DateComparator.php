<?php

namespace Behavioral\Strategy\Comparators;

use Behavioral\Strategy\Interfaces\Comparator;

class DateComparator implements Comparator
{

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function compare(mixed $a, mixed $b): int
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}