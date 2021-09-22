<?php


namespace Decorator;


class ClientCode
{
    public function __invoke(AbstractComponent $component): string
    {
        return $component->execute();
    }
}
