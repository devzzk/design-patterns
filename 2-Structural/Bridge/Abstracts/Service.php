<?php

namespace Structural\Bridge\Abstracts;

use Structural\Bridge\Interfaces\Formatter;

abstract class Service
{

    public function __construct(protected Formatter $implementation)
    {
    }

    public function setImplementation(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}