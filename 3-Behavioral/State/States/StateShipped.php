<?php

namespace Behavioral\State\States;

use Behavioral\State\Interfaces\State;
use Behavioral\State\OrderContext;

class StateShipped implements State
{

    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}