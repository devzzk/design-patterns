<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\DependencyInjection\DatabaseConfiguration;
use Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', '3306', 'root', '123456');
        $connection = new DatabaseConnection($config);

        $this->assertSame('root:123456@localhost:3306', $connection->getDsn());
    }
}