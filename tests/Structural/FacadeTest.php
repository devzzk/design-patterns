<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\Facade\Facade;
use Structural\Facade\Interfaces\Bios;
use Structural\Facade\Interfaces\OperatingSystem;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')
            ->with($os);
        /** @noinspection PhpParamInspection */
        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}