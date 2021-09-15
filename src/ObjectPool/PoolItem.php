<?php

namespace ObjectPool;

class PoolItem
{
    private int $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}