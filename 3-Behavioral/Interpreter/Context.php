<?php

namespace Behavioral\Interpreter;

use Behavioral\Interpreter\AbstractExps\VariableExp;

class Context
{
    private array $poolVariable;

    public function lookUp(string $name): bool
    {
        if (!key_exists($name, $this->poolVariable)) {
            throw new \Exception("no exist variable: $name");
        }

        return $this->poolVariable[$name];
    }

    public function assign(VariableExp $variable, bool $val)
    {
        $this->poolVariable[$variable->getName()] = $val;
    }

}