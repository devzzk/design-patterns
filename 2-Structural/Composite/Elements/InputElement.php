<?php

namespace Structural\Composite\Elements;

use Structural\Composite\Interfaces\Renderable;

class InputElement implements Renderable
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}