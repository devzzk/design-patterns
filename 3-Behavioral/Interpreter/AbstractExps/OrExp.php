<?php

namespace Behavioral\Interpreter\AbstractExps;

use Behavioral\Interpreter\AbstractExp;
use Behavioral\Interpreter\Context;

class OrExp extends AbstractExp
{
    public function __construct(private AbstractExp $first, private AbstractExp $second)
    {
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}