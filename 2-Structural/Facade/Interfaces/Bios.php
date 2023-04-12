<?php

namespace Structural\Facade\Interfaces;

interface Bios
{
    public function waitForKeyPress();

    public function launch(OperatingSystem $os);

    public function powerDown();

    public function execute();
}