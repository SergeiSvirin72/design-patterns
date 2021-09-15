<?php


namespace AbstractFactory;


class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA(): ProductA {
        return new ConcreteProductA2();
    }
    public function createProductB(): ProductB {
        return new ConcreteProductB2();
    }
}