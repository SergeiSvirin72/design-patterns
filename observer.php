<?php

use Observer\Observable;
use Observer\ObserverA;
use Observer\ObserverB;

require __DIR__ . '/vendor/autoload.php';

$observable = new Observable();

$observerA = new ObserverA();
$observerB = new ObserverB();

$observable->eventManager->attach($observerA);
$observable->eventManager->attach($observerB);

$observable->setState('New state');
