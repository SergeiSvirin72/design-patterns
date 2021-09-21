<?php

use Adapter\Adapter;
use Adapter\ClientCode;
use Adapter\ClientInterface;
use Adapter\Service;

require __DIR__ . '/vendor/autoload.php';

$clientCode = new ClientCode();

$adapter = new Adapter(new Service());
print $clientCode($adapter)."\n";

$clientInterface = new ClientInterface();
print $clientCode($clientInterface)."\n";