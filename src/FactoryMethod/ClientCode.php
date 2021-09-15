<?php


namespace FactoryMethod;


class ClientCode
{
    public function __invoke(ProductFactory $factory)
    {
        $factory->factoryOperation();
    }
}