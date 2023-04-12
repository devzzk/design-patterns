<?php

namespace Structural\Flyweight\Types;

class Word implements \Structural\Flyweight\Interfaces\Text
{

    public function __construct(private string $name)
    {
    }

    public function render(string $extrinsicState): string
    {
        return sprintf('Word %s with font %s', $this->name, $extrinsicState);
    }
}