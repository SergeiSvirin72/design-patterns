<?php


namespace FactoryMethod;


class ConcreteFactoryA extends AbstractProductFactory
{
    public function createProduct(): AbstractProduct
    {
        return new ConcreteProductA();
    }
}
