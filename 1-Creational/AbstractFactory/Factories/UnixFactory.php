<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Interfaces\CsvWriter;
use Creational\AbstractFactory\Interfaces\JsonWriter;
use Creational\AbstractFactory\Interfaces\WriterFactory;
use Creational\AbstractFactory\Writer\UnixCsvWriter;
use Creational\AbstractFactory\Writer\UnixJsonWriter;
use JetBrains\PhpStorm\Pure;

class UnixFactory implements WriterFactory
{

    /**
     * @return JsonWriter
     */
    #[Pure]
    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }

    /**
     * @return CsvWriter
     */
    #[Pure]
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }
}