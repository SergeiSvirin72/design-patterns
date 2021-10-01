<?php

namespace Composite;

use Visitor\ElementInterface;

interface ComponentInterface extends ElementInterface
{
    public function getSum(): int;

    public function isComposite(): bool;

    public function getStringView(int $whitespace = 0): string;
}
