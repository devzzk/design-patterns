<?php

namespace Behavioral\Mediator\Colleagues;

use Behavioral\Mediator\Colleague;

class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}