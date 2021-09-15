<?php


namespace Prototype;


class Prototype
{
    public string $field;
    public AssociatedObject $object;

    public function __clone(): void
    {
        $this->object = clone $this->object;
        $this->object->prototype = $this;
    }
}