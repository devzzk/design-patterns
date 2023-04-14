<?php

namespace Behavioral\State\States;

use Behavioral\State\Interfaces\State;
use Behavioral\State\OrderContext;

class StateCreated implements State
{

    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}