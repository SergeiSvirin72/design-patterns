<?php


namespace FactoryMethod;


abstract class AbstractProductFactory
{
    abstract public function createProduct(): AbstractProduct;

    public function factoryOperation()
    {
        $product = $this->createProduct();
        $product->productOperation();
    }
}
