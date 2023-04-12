<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\Formatters\HtmlFormatter;
use Structural\Bridge\Formatters\PlainTextFormatter;
use Structural\Bridge\Services\HelloWorldService;

class BridgeTest extends TestCase
{

    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}