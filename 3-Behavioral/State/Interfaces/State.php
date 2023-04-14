<?php

namespace Behavioral\State\Interfaces;

use Behavioral\State\OrderContext;

interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}