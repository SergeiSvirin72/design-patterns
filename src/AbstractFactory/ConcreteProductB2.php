<?php


namespace AbstractFactory;


class ConcreteProductB2 extends AbstractProductB
{
    public function productBOperation()
    {
        print "The result of the product B2.\n";
    }

    public function productBOperationWithProductA(AbstractProductA $productA)
    {
        print "The result of the product B2 with A2.\n";
    }
}