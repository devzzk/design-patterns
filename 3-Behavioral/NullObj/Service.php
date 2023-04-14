<?php

namespace Behavioral\NullObj;

use Behavioral\NullObj\Interfaces\Logger;

class Service
{
    public function __construct(private Logger $logger)
    {

    }

    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}