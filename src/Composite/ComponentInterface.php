<?php

namespace Composite;

use Visitor\ElementInterface;

interface ComponentInterface extends ElementInterface
{
    public function getSum(): int;

    public function isComposite(): bool;
}
