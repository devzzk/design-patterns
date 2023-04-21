<?php

namespace Tests\Behavioral;

use Behavioral\Mediator\Colleagues\Ui;
use Behavioral\Mediator\Colleagues\UserRepository;
use Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator( new Ui(), new UserRepository());
        $mediator->printInfoAbout('Dominik');

        $this->expectOutputString('User: Dominik');
    }
}