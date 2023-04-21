<?php

namespace Behavioral\Command\Commands;

use Behavioral\Command\Interfaces\Command;
use Behavioral\Command\Receiver;

class HelloCommand implements Command
{

    public function __construct(private Receiver $output)
    {
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}