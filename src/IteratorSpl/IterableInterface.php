<?php

namespace IteratorSpl;

use Iterator;

interface IterableInterface
{
    public function createIterator(): Iterator;
}
