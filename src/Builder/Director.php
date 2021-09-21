<?php


namespace Builder;


class Director
{
    public function makeSimpleProduct(AbstractBuilder $builder): AbstractBuilder
    {
        return $builder->createProduct()->buildStep2();
    }

    public function makeFullProduct(AbstractBuilder $builder): AbstractBuilder
    {
        return $builder->createProduct()->buildStep1()->buildStep2()->buildStep3();
    }
}
