<?php

namespace Structural\AdapterWrapper\Interfaces;

interface Book
{
    public function getPage(): int;

    public function open();

    public function turnPage();
}