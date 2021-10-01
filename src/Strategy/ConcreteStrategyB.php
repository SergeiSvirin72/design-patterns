<?php

namespace Strategy;

class ConcreteStrategyB extends AbstractStrategy
{
    function execute(int $a, int $b): int
    {
        return $a - $b;
    }
}
