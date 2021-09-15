<?php


namespace Builder;


abstract class Builder
{
    abstract public function buildStep1(): self;

    abstract public function buildStep2(): self;

    abstract public function buildStep3(): self;

    protected Product $product;

    public function createProduct(): self
    {
        $this->product = new Product();
        return $this;
    }

    public function getProduct(): Product
    {
        print 'Result product: '; print_r($this->product->parts);

        $result = $this->product;
        $this->createProduct();
        return $result;
    }
}
