<?php
declare(strict_types=1);

namespace Tests\Creational;

use Creational\AbstractFactory\Factories\UnixFactory;
use Creational\AbstractFactory\Factories\WinFactory;
use Creational\AbstractFactory\Interfaces\CsvWriter;
use Creational\AbstractFactory\Interfaces\JsonWriter;
use Creational\AbstractFactory\Interfaces\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixFactory()],
            [new WinFactory()],
        ];
    }

    /**
     * Add the query params
     *
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());

    }
}