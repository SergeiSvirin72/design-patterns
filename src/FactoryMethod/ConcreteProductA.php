<?php


namespace FactoryMethod;


class ConcreteProductA extends Product
{
    public function productOperation()
    {
        print "The result of the product A.\n";
    }
}