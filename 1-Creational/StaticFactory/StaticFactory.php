<?php

namespace Creational\StaticFactory;

use Creational\StaticFactory\Formatters\NumberFormatter;
use Creational\StaticFactory\Formatters\StringFormatter;
use Creational\StaticFactory\Interfaces\Formatter;

final class StaticFactory
{
    public static function factory(string $type): Formatter
    {
        return match ($type) {
            'number' => new NumberFormatter(),
            'string' => new StringFormatter(),
            default => throw new \InvalidArgumentException('Unknown format given'),
        };
    }
}