<?php

use Strategy\ConcreteStrategyA;
use Strategy\ConcreteStrategyB;
use Strategy\Context;

require __DIR__ . '/vendor/autoload.php';

$strategyA = new ConcreteStrategyA();
$context = new Context($strategyA);
print $context->execute()."\n";

$strategyB = new ConcreteStrategyB();
$context->setStrategy($strategyB);
print $context->execute()."\n";

