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

    public function execute(int $a, int $b): int
    {
        return $this->strategy->execute($a, $b);
    }
}
