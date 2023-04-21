<?php

namespace Behavioral\Mediator;

use Behavioral\Mediator\Interfaces\Mediator;

abstract class Colleague
{
    protected Mediator $mediator;

    final public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}