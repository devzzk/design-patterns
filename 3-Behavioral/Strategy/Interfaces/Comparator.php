<?php

namespace Behavioral\Strategy\Interfaces;

interface Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare(mixed $a, mixed $b): int;
}