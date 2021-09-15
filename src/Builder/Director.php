<?php


namespace Builder;


class Director
{
    public function makeSimpleProduct(Builder $builder): Builder
    {
        return $builder->createProduct()->buildStep2();
    }

    public function makeFullProduct(Builder $builder): Builder
    {
        return $builder->createProduct()->buildStep1()->buildStep2()->buildStep3();
    }
}
