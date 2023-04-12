<?php

declare(strict_types=1);

namespace Creational\Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __controller()
    {

    }

    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }
}