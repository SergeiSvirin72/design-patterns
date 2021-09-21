<?php


namespace FactoryMethod;


class ConcreteProductA extends AbstractProduct
{
    public function productOperation()
    {
        print "The result of the product A.\n";
    }
}
