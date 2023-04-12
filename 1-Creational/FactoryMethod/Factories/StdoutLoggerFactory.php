<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\Interfaces\Logger;
use Creational\FactoryMethod\Loggers\StdoutLogger;

class StdoutLoggerFactory implements \Creational\FactoryMethod\Interfaces\LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}