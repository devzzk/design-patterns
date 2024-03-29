<?php

namespace Tests\Behavioral;

use Behavioral\ChaiOfResponsibilities\Handler;
use Behavioral\ChaiOfResponsibilities\Storages\FastStorage;
use Behavioral\ChaiOfResponsibilities\Storages\SlowStorage;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class ChainOfResponsibilitiesTest extends TestCase
{
    private Handler $chain;

    protected function setUp(): void
    {
        $this->chain = new FastStorage(
            ['/foo/bar?index=1' => 'Hello In Memory!'],
            new SlowStorage()
        );
    }

    public function testCanRequestKeyInFastStorage()
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertSame('Hello In Memory!', $this->chain->handle($request));
    }

    public function testCanRequestKeyInSlowStorage()
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertSame('Hello World!', $this->chain->handle($request));
    }
}