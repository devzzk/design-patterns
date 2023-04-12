<?php

namespace Structural\Composite\Elements;

use Structural\Composite\Interfaces\Renderable;

class TextElement implements Renderable
{

    public function __construct(private string $text)
    {

    }

    public function render(): string
    {
        return $this->text;
    }
}