<?php

namespace Iterator;

interface IterableInterface
{
    public function createEvenIterator(): IteratorInterface;
    public function createBackwardsIterator(): IteratorInterface;
}
