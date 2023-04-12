<?php

namespace Structural\Facade;

use Structural\Facade\Interfaces\Bios;
use Structural\Facade\Interfaces\OperatingSystem;

class Facade
{
    public function __construct(private Bios $bios, private OperatingSystem $os)
    {
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();

    }
}