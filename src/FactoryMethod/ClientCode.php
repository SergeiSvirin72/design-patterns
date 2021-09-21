<?php


namespace FactoryMethod;


class ClientCode
{
    public function __invoke(AbstractProductFactory $factory)
    {
        $factory->factoryOperation();
    }
}
