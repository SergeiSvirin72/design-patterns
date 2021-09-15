<?php


namespace FactoryMethod;


abstract class ProductFactory
{
    abstract public function createProduct(): Product;

    public function factoryOperation()
    {
        $product = $this->createProduct();
        $product->productOperation();
    }
}
