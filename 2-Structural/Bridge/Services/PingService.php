<?php

namespace Structural\Bridge\Services;

use Structural\Bridge\Abstracts\Service;

class PingService extends Service
{

    public function get()
    {
        return $this->implementation->format('pong');
    }
}