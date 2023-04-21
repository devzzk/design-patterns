<?php

namespace Behavioral\NullObj\Logger;

use Behavioral\NullObj\Interfaces\Logger;

class PrintLogger implements Logger
{

    public function log(string $str)
    {
        echo $str;
    }
}