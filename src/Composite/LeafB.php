<?php

namespace Composite;

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
}
