<?php

declare(strict_types=1);

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Interfaces\Logger;
use Creational\FactoryMethod\Loggers\FileLogger;

class FileLoggerFactory implements \Creational\FactoryMethod\Interfaces\LoggerFactory
{
    public function __construct(private string $filePath)
    {
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}