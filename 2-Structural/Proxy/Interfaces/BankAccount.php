<?php

namespace Structural\Proxy\Interfaces;

interface BankAccount
{

    public function deposit(int $amount);

    public function getBalance(): int;
}