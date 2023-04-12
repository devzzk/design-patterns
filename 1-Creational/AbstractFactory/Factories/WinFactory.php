<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Interfaces\CsvWriter;
use Creational\AbstractFactory\Interfaces\JsonWriter;
use Creational\AbstractFactory\Interfaces\WriterFactory;
use Creational\AbstractFactory\Writer\UnixCsvWriter;
use Creational\AbstractFactory\Writer\UnixJsonWriter;
use Creational\AbstractFactory\Writer\WinCsvWriter;
use Creational\AbstractFactory\Writer\WinJsonWriter;
use JetBrains\PhpStorm\Pure;

class WinFactory implements WriterFactory
{

    /**
     * @return CsvWriter
     */
    #[Pure]
    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }

    /**
     * @return CsvWriter
     */
    #[Pure]
    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }
}