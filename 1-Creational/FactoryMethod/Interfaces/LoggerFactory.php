<?php

declare(strict_types=1);

namespace Creational\FactoryMethod\Interfaces;

interface LoggerFactory
{
    public function createLogger(): Logger;

}