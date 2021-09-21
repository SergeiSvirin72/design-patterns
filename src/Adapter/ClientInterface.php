<?php


namespace Adapter;


class ClientInterface
{
    public function method(array $data): string
    {
        return implode(', ', $data);
    }
}
