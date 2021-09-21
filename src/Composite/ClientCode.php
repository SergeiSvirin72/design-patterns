<?php

namespace Composite;

class ClientCode
{
    public function __invoke(ComponentInterface $component): int
    {
        return $component->getSum();
    }
}