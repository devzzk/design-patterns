<?php

namespace Behavioral\State;

use Behavioral\State\Interfaces\State;
use Behavioral\State\States\StateCreated;
use JetBrains\PhpStorm\Pure;

class OrderContext
{
    private State $state;

    /**
     * @return OrderContext
     */
    #[Pure] public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function toString()
    {
        return $this->state->toString();
    }

}