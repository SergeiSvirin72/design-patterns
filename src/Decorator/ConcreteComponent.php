<?php


namespace Decorator;


class ConcreteComponent extends AbstractComponent
{
    public function execute(): string
    {
        return 'ConcreteComponent execute';
    }
}
