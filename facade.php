<?php

use Facade\Facade;
use Facade\SubsystemA;
use Facade\SubsystemB;

require __DIR__ . '/vendor/autoload.php';

$subSystemA = new SubsystemA();
$subSystemB = new SubsystemB();
$facade = new Facade($subSystemA, $subSystemB);
print $facade->operation();
