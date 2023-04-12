<?php

namespace Creational\AbstractFactory\Writer;

use Creational\AbstractFactory\Interfaces\CsvWriter;

class UnixCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line) . '\n';
    }
}