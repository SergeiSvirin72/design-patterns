<?php

namespace StrategyFunc;

class Context
{
    public function execute(callable $callback): string
    {
        return $callback();
    }
}
