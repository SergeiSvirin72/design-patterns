<?php

namespace IteratorSpl;

use \Iterator;

class MyIterator implements Iterator
{
    protected Collection $collection;
    protected int $position = 0;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function current()
    {
        return $this->collection->getItem($this->position);
    }

    public function next()
    {
        $this->position += 1;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        $item = $this->collection->getItem($this->position);
        return isset($item);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}
