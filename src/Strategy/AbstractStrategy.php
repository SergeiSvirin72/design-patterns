<?php

namespace Strategy;

abstract class AbstractStrategy
{
    abstract function execute(int $a, int $b): int;
}
