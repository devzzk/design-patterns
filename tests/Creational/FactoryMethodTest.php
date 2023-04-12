<?php

declare(strict_types=1);

namespace Tests\Creational;

use Creational\FactoryMethod\Factories\FileLoggerFactory;
use Creational\FactoryMethod\Factories\StdoutLoggerFactory;
use Creational\FactoryMethod\Loggers\FileLogger;
use Creational\FactoryMethod\Loggers\StdoutLogger;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}