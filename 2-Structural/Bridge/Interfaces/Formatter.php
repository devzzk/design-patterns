<?php

namespace Structural\Bridge\Interfaces;

interface Formatter
{
    public function format(string $text): string;
}