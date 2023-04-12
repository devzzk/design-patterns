<?php

namespace Structural\Flyweight;

use Countable;
use JetBrains\PhpStorm\Pure;
use Structural\Flyweight\Interfaces\Text;
use Structural\Flyweight\Types\Character;
use Structural\Flyweight\Types\Word;

class TextFactory implements Countable
{

    /**
     * @var Text[]
     */
    private array $charPool = [];

    public function get(string $name): Text
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    #[Pure]
    private function create(string $name): Text
    {
        if (strlen($name) == 1) {
            return new Character($name);
        }
        return new Word($name);
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->charPool);
    }
}