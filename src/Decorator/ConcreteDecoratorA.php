<?php


namespace Decorator;


class ConcreteDecoratorA extends BaseDecorator
{
    public function execute(): string
    {
        return 'ConcreteDecoratorA ('.parent::execute().')';
    }
}
