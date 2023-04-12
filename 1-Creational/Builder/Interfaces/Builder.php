<?php

namespace Creational\Builder\Interfaces;

use Creational\Builder\Parts\Vehicle;

interface Builder
{
    public function addWheel(): void;
    public function addEngine(): void;
    public function addDoors(): void;
    public function getVehicle(): Vehicle;
    public function createVehicle(): void;
}