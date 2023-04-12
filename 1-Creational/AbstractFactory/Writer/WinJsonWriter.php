<?php

namespace Creational\AbstractFactory\Writer;

use Creational\AbstractFactory\Interfaces\JsonWriter;

class WinJsonWriter implements JsonWriter
{

    public function write(array $line, bool $formatted): string
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($line, $options);
    }
}