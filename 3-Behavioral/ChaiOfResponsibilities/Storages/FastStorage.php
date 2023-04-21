<?php

namespace Behavioral\ChaiOfResponsibilities\Storages;

use Behavioral\ChaiOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class FastStorage extends Handler
{

    public function __construct(private array $data, ?Handler $successor = null)
    {
        parent::__construct($successor);
    }

    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }

}