<?php


namespace AbstractFactory;


class ConcreteProductB1 extends ProductB
{
    public function productBOperation()
    {
        print "The result of the product B1.\n";
    }

    public function productBOperationWithProductA(ProductA $productA)
    {
        print "The result of the product B1 with A1.\n";
    }
}