<?php

namespace Iterator;

class BackwardsIterator implements IteratorInterface
{
    protected IterableInterface $collection;
    protected int $position;

    public function __construct(IterableInterface $collection)
    {
        $this->collection = $collection;
        $this->position = $this->collection->getLength() + 1;
    }

    public function getNext(): ?CollectionItem
    {
        if ($this->hasMore()) {
            $this->position -= 1;
            return $this->collection->getItem($this->position);
        }
        return null;
    }

    public function hasMore(): bool
    {
        return ($this->position - 1) > 0;
    }
}
