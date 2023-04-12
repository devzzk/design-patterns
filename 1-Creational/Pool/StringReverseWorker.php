<?php

namespace Creational\Pool;

class StringReverseWorker
{
    public function run(string $text): string
    {
        return strrev($text);
    }
}