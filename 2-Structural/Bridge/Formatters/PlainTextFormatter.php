<?php

namespace Structural\Bridge\Formatters;

class PlainTextFormatter implements \Structural\Bridge\Interfaces\Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}