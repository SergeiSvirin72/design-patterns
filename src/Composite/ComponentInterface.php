<?php

namespace Composite;

interface ComponentInterface
{
    public function getSum(): int;

    public function isComposite(): bool;
}
