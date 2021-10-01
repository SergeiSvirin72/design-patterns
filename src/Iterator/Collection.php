<?php

namespace Iterator;

class Collection implements IterableInterface
{
    protected array $collection;

    public function __construct(...$collectionItems)
    {
        $this->collection = $collectionItems;
    }

    public function getItem(int $position): CollectionItem
    {
        return $this->collection[$position - 1];
    }

    public function getLength(): int
    {
        return count($this->collection);
    }

    public function createEvenIterator(): IteratorInterface
    {
        return new EvenIterator($this);
    }

    public function createBackwardsIterator(): IteratorInterface
    {
        return new BackwardsIterator($this);
    }
}
