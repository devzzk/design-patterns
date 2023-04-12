<?php

namespace Structural\Flyweight\Interfaces;

interface Text
{
    public function render(string $extrinsicState): string;
}