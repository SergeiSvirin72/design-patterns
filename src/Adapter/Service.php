<?php


namespace Adapter;


class Service
{
    public function serviceMethod(SpecialData $specialData): string
    {
        return implode(' - ', $specialData->data);
    }
}
