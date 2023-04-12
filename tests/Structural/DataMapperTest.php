<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\DataMapper\Adapters\StorageAdapter;
use Structural\DataMapper\Mappers\UserMapper;
use Structural\DataMapper\Models\User;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }


    public function testWillNotMapInvalidData()
    {
        $this->expectException(\InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}