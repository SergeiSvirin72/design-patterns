<?php


namespace Observer;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class Publisher implements SplSubject
{
    protected SplObjectStorage $observers;
    protected string $state = '';

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

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setState(string $state)
    {
        $this->state = $state;
        $this->notify();
    }

    public function getState(): string
    {
        return $this->state;
    }
}
