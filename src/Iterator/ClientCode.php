<?php

namespace Iterator;

class ClientCode
{
    public function __invoke(IteratorInterface $iterator)
    {
        print $iterator::class."\n";
        while ($iterator->hasMore()) {
            print $iterator->getNext()->getId() . "\n";
        }
        print "\n";
    }
}
