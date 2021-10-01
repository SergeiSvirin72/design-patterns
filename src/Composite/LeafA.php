<?php

namespace Composite;

use Visitor\VisitorInterface;

class LeafA implements ComponentInterface
{
    public function isComposite(): bool
    {
        return false;
    }

    public function getStringView(int $whitespace = 0): string
    {
        return str_repeat(" ", $whitespace)."Leaf A\n";
    }

    public function getSum(): int
    {
        return 5;
    }

    /**
     * For Visitor pattern
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitLeafA($this);
    }

    public function featureLeafA(): string
    {
        return 'Leaf A';
    }
}
