<?php

namespace Command;

class ConcreteCommand implements CommandInterface
{
    protected Receiver $receiver;
    protected int $a, $b;

    public function __construct(Receiver $receiver, int $a, int $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute(): bool
    {
        if ($this->a <= 0 || $this->b <= 0) {
            return false;
        }
        $this->receiver->operation($this->a, $this->b);
        return true;

    }
}
