<?php

namespace Composite;

use Visitor\VisitorInterface;

class LeafB implements ComponentInterface
{
    public function isComposite(): bool
    {
        return false;
    }

    public function getStringView(int $whitespace = 0): string
    {
        return str_repeat(" ", $whitespace)."Leaf B\n";
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
