<?php

namespace Behavioral\Interpreter\AbstractExps;

use Behavioral\Interpreter\AbstractExp;
use Behavioral\Interpreter\Context;

class VariableExp extends AbstractExp
{
    public function __construct(private string $name)
    {
    }

    /**
     * @throws \Exception
     */
    public function interpret(Context $context): bool
    {
        return $context->lookUp($this->name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}