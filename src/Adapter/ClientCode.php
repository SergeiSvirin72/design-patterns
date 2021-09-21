<?php


namespace Adapter;


class ClientCode
{
    public function __invoke(ClientInterface $clientInterface): string
    {
        return $clientInterface->method(['Some', 'data']);
    }
}