<?php

namespace Iterator;

interface IteratorInterface
{
    public function getNext();

    public function hasMore(): bool;
}
