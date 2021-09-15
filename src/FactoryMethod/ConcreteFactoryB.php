<?php


namespace FactoryMethod;


class ConcreteFactoryB extends ProductFactory
{
    public function createProduct(): Product
    {
        return new ConcreteProductB();
    }
}
