<?php


namespace Builder;


class ConcreteBuilderA extends AbstractBuilder
{
    public function buildStep1(): self
    {
        $this->product->parts[] = "PartA1";
        return $this;
    }

    public function buildStep2(): self
    {
        $this->product->parts[] = "PartA2";
        return $this;
    }

    public function buildStep3(): self
    {
        $this->product->parts[] = "PartA3";
        return $this;
    }
}
