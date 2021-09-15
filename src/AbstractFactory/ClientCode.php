<?php


namespace AbstractFactory;


class ClientCode
{
    public function __invoke(AbstractFactory $abstractFactory)
    {
        $productA = $abstractFactory->createProductA();
        $productB = $abstractFactory->createProductB();

        $productA->productAOperation();
        $productB->productBOperation();
        $productB->productBOperationWithProductA($productA);
    }
}
