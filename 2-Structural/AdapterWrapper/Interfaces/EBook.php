<?php

namespace Structural\AdapterWrapper\Interfaces;

interface EBook
{
    public function pressNext();

    public function getPage(): array;

    public function unLock();
}