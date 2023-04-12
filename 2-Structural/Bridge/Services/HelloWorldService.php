<?php

namespace Structural\Bridge\Services;

use Structural\Bridge\Abstracts\Service;

class HelloWorldService extends Service
{

    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}