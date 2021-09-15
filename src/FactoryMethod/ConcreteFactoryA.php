<?php


namespace FactoryMethod;


class ConcreteFactoryA extends ProductFactory
{
    public function createProduct(): Product
    {
        return new ConcreteProductA();
    }
}