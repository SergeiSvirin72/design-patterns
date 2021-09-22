<?php

use StrategyFunc\Context;

require __DIR__ . '/vendor/autoload.php';

$strategyA = function() { return 'StrategyA'; };
$strategyB = function() { return 'StrategyB'; };

$context = new Context();
print $context->execute($strategyA)."\n";
print $context->execute($strategyB)."\n";
