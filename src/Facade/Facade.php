<?php


namespace Facade;


class Facade
{
    protected SubsystemA $subSystemA;
    protected SubsystemB $subSystemB;

    public function __construct(SubsystemA $subSystemA, SubsystemB $subSystemB)
    {
        $this->subSystemA = $subSystemA;
        $this->subSystemB = $subSystemB;
    }

    public function operation(): string
    {
        $result = $this->subSystemA->operationStart();
        $result .= $this->subSystemB->operationStart();
        $result .= $this->subSystemA->operationFinish();
        $result .= $this->subSystemB->operationFinish();

        return $result;
    }
}
