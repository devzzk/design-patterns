<?php

namespace Structural\Facade\Interfaces;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}