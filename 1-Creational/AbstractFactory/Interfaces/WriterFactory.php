<?php
namespace Creational\AbstractFactory\Interfaces;

interface WriterFactory
{

    public function createJsonWriter(): JsonWriter;

    public function createCsvWriter(): CsvWriter;
}