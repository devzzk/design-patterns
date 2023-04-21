<?php

namespace Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{
    private SplObjectStorage $observers;

    private $email;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }


    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email): void
    {
        $this->email = $email;
        $this->notify();
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}