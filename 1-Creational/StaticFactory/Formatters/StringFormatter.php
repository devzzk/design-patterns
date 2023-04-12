<?php

namespace Creational\StaticFactory\Formatters;

class StringFormatter implements \Creational\StaticFactory\Interfaces\Formatter
{

    public function format(string $input): string
    {
        return $input;
    }
}