<?php

declare(strict_types=1);

namespace Tests\Creational;

use Creational\Builder\Builders\CarBuilder;
use Creational\Builder\Builders\TruckBuilder;
use Creational\Builder\Director;
use Creational\Builder\Parts\Car;
use Creational\Builder\Parts\Truck;
use PHPUnit\Framework\TestCase;

class BuildTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}