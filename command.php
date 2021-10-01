<?php

use Command\ConcreteCommand;
use Command\Invoker;
use Command\Receiver;

require __DIR__ . '/vendor/autoload.php';

$receiver = new Receiver();

$command = new ConcreteCommand($receiver, 5, 3);
$invoker = new Invoker($command);
$invoker->executeCommand();

$command = new ConcreteCommand($receiver, 5, 0);
$invoker->setCommand($command);
$invoker->executeCommand();
