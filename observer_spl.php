<?php

use ObserverSpl\Publisher;
use ObserverSpl\SubscriberA;
use ObserverSpl\SubscriberB;

require __DIR__ . '/vendor/autoload.php';

$subscriberA = new SubscriberA();
$subscriberB = new SubscriberB();

$publisher = new Publisher();
$publisher->attach($subscriberA);
$publisher->attach($subscriberB);

$publisher->setState('New state');
