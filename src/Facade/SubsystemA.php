<?php


namespace Facade;


class SubsystemA
{
    public function operationStart(): string
    {
        return "SubsystemA start!\n";
    }

    public function operationFinish(): string
    {
        return "SubsystemA finish!\n";
    }
}
