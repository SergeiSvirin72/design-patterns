<?php


namespace Adapter;


class Adapter extends ClientInterface
{
    private Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    private function convertToServiceFormat(array $data): SpecialData
    {
        return new SpecialData($data);
    }

    public function method(array $data): string
    {
        $specialData = $this->convertToServiceFormat($data);
        return $this->service->serviceMethod($specialData);
    }
}
