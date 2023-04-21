<?php

namespace Behavioral\Command\Interfaces;

interface UndoableCommand extends Command
{
    public function undo();
}