<?php


namespace Observer;


use SplObjectStorage;

class EventManager
{
    protected SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(ObserverInterface $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(ObserverInterface $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify(ObservableInterface $observable)
    {
        foreach ($this->observers as $observer) {
            $observer->update($observable);
        }
    }
}
