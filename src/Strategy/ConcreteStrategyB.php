<?php

namespace Strategy;

class ConcreteStrategyB extends AbstractStrategy
{
    function execute(): string
    {
        return 'StrategyB';
    }
}
