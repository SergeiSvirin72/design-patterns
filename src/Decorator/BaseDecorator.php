<?php


namespace Decorator;


class BaseDecorator extends AbstractComponent
{
    protected AbstractComponent $component;

    public function __construct(AbstractComponent $component)
    {
        $this->component = $component;
    }

    public function execute(): string
    {
        return $this->component->execute();
    }
}
