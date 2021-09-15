<?php


namespace AbstractFactory;


class ConcreteProductB2 extends ProductB
{
    public function productBOperation()
    {
        print "The result of the product B2.\n";
    }

    public function productBOperationWithProductA(ProductA $productA)
    {
        print "The result of the product B2 with A2.\n";
    }
}