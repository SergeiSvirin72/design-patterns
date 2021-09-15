<?php


namespace AbstractFactory;


abstract class ProductB
{
    abstract public function productBOperation();
    abstract public function productBOperationWithProductA(ProductA $productA);
}