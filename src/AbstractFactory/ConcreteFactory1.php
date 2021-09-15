<?php


namespace AbstractFactory;


class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA(): AbstractProductA {
        return new ConcreteProductA1();
    }
    public function createProductB(): AbstractProductB {
        return new ConcreteProductB1();
    }
}
