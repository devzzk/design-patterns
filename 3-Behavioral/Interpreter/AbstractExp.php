<?php

namespace Behavioral\Interpreter;

abstract class AbstractExp
{
    abstract public function interpret(Context $context): bool;

}