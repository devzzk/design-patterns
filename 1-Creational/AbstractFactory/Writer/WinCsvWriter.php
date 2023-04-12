<?php

namespace Creational\AbstractFactory\Writer;

use Creational\AbstractFactory\Interfaces\CsvWriter;
use Creational\AbstractFactory\Interfaces\JsonWriter;

class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line) . "\r\n";
    }
}