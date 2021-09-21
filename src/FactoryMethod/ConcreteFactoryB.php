<?php


namespace FactoryMethod;


class ConcreteFactoryB extends AbstractProductFactory
{
    public function createProduct(): AbstractProduct
    {
        return new ConcreteProductB();
    }
}
