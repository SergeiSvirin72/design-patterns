<?php

use Decorator\ClientCode;
use Decorator\ConcreteComponent;
use Decorator\ConcreteDecoratorA;
use Decorator\ConcreteDecoratorB;

require __DIR__ . '/vendor/autoload.php';

$clientCode = new ClientCode();

$stack = new ConcreteComponent();

print $clientCode($stack)."\n";

$stack = new ConcreteDecoratorB($stack);
$stack = new ConcreteDecoratorA($stack);

print $clientCode($stack)."\n";
