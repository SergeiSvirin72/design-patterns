<?php

use Observer\Publisher;
use Observer\SubscriberA;
use Observer\SubscriberB;

require __DIR__ . '/vendor/autoload.php';

$subscriberA = new SubscriberA();
$subscriberB = new SubscriberB();

$publisher = new Publisher();
$publisher->attach($subscriberA);
$publisher->attach($subscriberB);

$publisher->setState('New state');
