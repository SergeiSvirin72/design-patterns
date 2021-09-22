<?php

namespace Strategy;

class Context
{
    protected AbstractStrategy $strategy;

    public function __construct(AbstractStrategy $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(AbstractStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute(): string
    {
        return $this->strategy->execute();
    }
}
