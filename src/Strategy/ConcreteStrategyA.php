<?php

namespace Strategy;

class ConcreteStrategyA extends AbstractStrategy
{
    function execute(): string
    {
        return 'StrategyA';
    }
}
