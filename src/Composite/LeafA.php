<?php

namespace Composite;

class LeafA implements ComponentInterface
{
    public function isComposite(): bool
    {
        return false;
    }

    public function getSum(): int
    {
        return 5;
    }
}
