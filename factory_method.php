<?php

use FactoryMethod\ConcreteFactoryA;
use FactoryMethod\ConcreteFactoryB;
use FactoryMethod\ClientCode;

require __DIR__ . '/vendor/autoload.php';

if (!isset($_SERVER['argv'][1])) {
    throw new Exception();
}
$arg = strtolower($_SERVER['argv'][1]);

$factory = match ($arg) {
    'a' => new ConcreteFactoryA(),
    'b' => new ConcreteFactoryB(),
};

$clientCode = new ClientCode();
$clientCode($factory);