<?php

namespace Creational\StaticFactory\Formatters;

use Creational\StaticFactory\Interfaces\Formatter;

class NumberFormatter implements Formatter
{

    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}