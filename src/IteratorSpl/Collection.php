<?php

namespace IteratorSpl;

use Iterator;

class Collection implements IterableInterface
{
    protected array $collection;

    public function __construct(...$collectionItems)
    {
        $this->collection = $collectionItems;
    }

    public function getItem(int $position): ?CollectionItem
    {
        return $this->collection[$position] ?? null;
    }

    public function createIterator(): Iterator
    {
        return new MyIterator($this);
    }
}
