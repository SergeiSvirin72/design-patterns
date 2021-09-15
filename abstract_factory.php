<?php

use AbstractFactory\ConcreteFactory1;
use AbstractFactory\ConcreteFactory2;
use AbstractFactory\ClientCode;

require __DIR__ . '/vendor/autoload.php';

if (!isset($_SERVER['argv'][1])) {
    throw new Exception();
}
$arg = strtolower($_SERVER['argv'][1]);

$factory = match ($arg) {
    '1' => new ConcreteFactory1(),
    '2' => new ConcreteFactory2(),
};

$clientCode = new ClientCode();
$clientCode($factory);