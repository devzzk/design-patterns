<?php

namespace Behavioral\Mediator\Colleagues;

use Behavioral\Mediator\Colleague;

class UserRepository extends Colleague
{
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}