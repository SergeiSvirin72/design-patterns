<?php


namespace AbstractFactory;


class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA(): ProductA {
        return new ConcreteProductA1();
    }
    public function createProductB(): ProductB {
        return new ConcreteProductB1();
    }
}