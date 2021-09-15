<?php


namespace Prototype;


class AssociatedObject
{
    public Prototype $prototype;

    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}