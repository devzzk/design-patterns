<?php
namespace Creational\AbstractFactory\Interfaces;

interface JsonWriter
{
    public function write(array $line, bool $formatted): string;
}