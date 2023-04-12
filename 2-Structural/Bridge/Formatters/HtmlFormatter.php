<?php

namespace Structural\Bridge\Formatters;

class HtmlFormatter implements \Structural\Bridge\Interfaces\Formatter
{

    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}