<?php

namespace Composite;

use Visitor\VisitorInterface;

class LeafB implements ComponentInterface
{
    public function isComposite(): bool
    {
        return false;
    }

    public function getSum(): int
    {
        return 7;
    }

    /**
     * For Visitor pattern
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitLeafB($this);
    }

    public function featureLeafB(): string
    {
        return 'Leaf B';
    }
}
