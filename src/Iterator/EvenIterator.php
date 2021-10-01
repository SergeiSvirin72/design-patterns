<?php

namespace Iterator;

class EvenIterator implements IteratorInterface
{
    protected IterableInterface $collection;
    protected int $position = 0;

    public function __construct(IterableInterface $collection)
    {
        $this->collection = $collection;
    }

    public function getNext(): ?CollectionItem
    {
        if ($this->hasMore()) {
            $this->position += 2;
            return $this->collection->getItem($this->position);
        }
        return null;
    }

    public function hasMore(): bool
    {
        return ($this->position + 2) <= $this->collection->getLength();
    }
}
