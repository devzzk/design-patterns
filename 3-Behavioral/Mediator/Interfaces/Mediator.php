<?php

namespace Behavioral\Mediator\Interfaces;

interface Mediator
{

    public function getUser(string $username): string;
}