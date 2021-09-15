<?php


namespace AbstractFactory;


class ConcreteProductB1 extends AbstractProductB
{
    public function productBOperation()
    {
        print "The result of the product B1.\n";
    }

    public function productBOperationWithProductA(AbstractProductA $productA)
    {
        print "The result of the product B1 with A1.\n";
    }
}