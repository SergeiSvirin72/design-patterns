<?php


namespace Decorator;


class ConcreteDecoratorB extends BaseDecorator
{
    public function execute(): string
    {
        return 'ConcreteDecoratorB ('.parent::execute().')';
    }
}
