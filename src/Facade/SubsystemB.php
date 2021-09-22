<?php


namespace Facade;


class SubsystemB
{
    public function operationStart(): string
    {
        return "SubsystemB start!\n";
    }

    public function operationFinish(): string
    {
        return "SubsystemB finish!\n";
    }
}
