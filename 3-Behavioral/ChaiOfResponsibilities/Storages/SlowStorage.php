<?php

declare(strict_types=1);

namespace Behavioral\ChaiOfResponsibilities\Storages;

use Behavioral\ChaiOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowStorage extends Handler
{

    protected function processing(RequestInterface $request): string
    {
        return 'Hello World!';
    }
}