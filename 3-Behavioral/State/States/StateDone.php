<?php

namespace Behavioral\State\States;

use Behavioral\State\Interfaces\State;
use Behavioral\State\OrderContext;

class StateDone implements State
{

    public function proceedToNext(OrderContext $context)
    {
        // there is nothing more to do
    }

    public function toString(): string
    {
        return 'done';
    }
}