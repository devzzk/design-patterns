<?php

declare(strict_types=1);

namespace Creational\FactoryMethod\Loggers;

class StdoutLogger implements \Creational\FactoryMethod\Interfaces\Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}