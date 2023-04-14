<?php

namespace Behavioral\ChaiOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{

    public function __construct(private ?Handler $successor = null)
    {
    }
//
//    final public function append(Handler $handler)
//    {
//
//    }

    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            // the request has not been processed by this handler => see the next
            $processed = $this->successor->handle($request);
        }
        return $processed;
    }

    abstract protected function processing(RequestInterface $request);
}
