<?php

namespace Creational\AbstractFactory\Interfaces;

interface CsvWriter
{

    public function write(array $line): string;
}