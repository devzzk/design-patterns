<?php

namespace Behavioral\Mediator;

use Behavioral\Mediator\Colleagues\Ui;
use Behavioral\Mediator\Colleagues\UserRepository;
use JetBrains\PhpStorm\Pure;

class UserRepositoryUiMediator implements Interfaces\Mediator
{
    public function __construct(private Ui $ui, private UserRepository $userRepository)
    {
        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    #[Pure]
    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }

    public function printInfoAbout($user)
    {
        $this->ui->outputUserInfo($user);
    }
}