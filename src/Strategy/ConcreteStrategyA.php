<?php

namespace Strategy;

class ConcreteStrategyA extends AbstractStrategy
{
    function execute(int $a, int $b): int
    {
        return $a + $b;
    }
}
