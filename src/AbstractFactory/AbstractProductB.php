<?php


namespace AbstractFactory;


abstract class AbstractProductB
{
    abstract public function productBOperation();
    abstract public function productBOperationWithProductA(AbstractProductA $productA);
}