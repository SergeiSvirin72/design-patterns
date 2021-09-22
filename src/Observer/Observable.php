<?php


namespace Observer;


class Observable implements ObservableInterface
{
    public EventManager $eventManager;
    protected string $state = '';

    public function __construct()
    {
        $this->eventManager = new EventManager();
    }

    public function setState(string $state)
    {
        $this->state = $state;
        $this->eventManager->notify($this);
    }

    public function getState(): string
    {
        return $this->state;
    }
}
