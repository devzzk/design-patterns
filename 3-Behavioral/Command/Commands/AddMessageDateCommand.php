<?php

namespace Behavioral\Command\Commands;

use Behavioral\Command\Interfaces\UndoableCommand;
use Behavioral\Command\Receiver;

class AddMessageDateCommand implements UndoableCommand
{

    public function __construct(private Receiver $output)
    {
    }

    public function execute()
    {
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableDate();
    }
}