<?php


namespace AbstractFactory;


class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA(): AbstractProductA {
        return new ConcreteProductA2();
    }
    public function createProductB(): AbstractProductB {
        return new ConcreteProductB2();
    }
}
