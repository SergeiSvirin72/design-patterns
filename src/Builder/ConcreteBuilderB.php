<?php


namespace Builder;


class ConcreteBuilderB extends Builder
{
    public function buildStep1(): self
    {
        $this->product->parts[] = "PartB1";
        return $this;
    }

    public function buildStep2(): self
    {
        $this->product->parts[] = "PartB2";
        return $this;
    }

    public function buildStep3(): self
    {
        $this->product->parts[] = "PartB3";
        return $this;
    }
}
