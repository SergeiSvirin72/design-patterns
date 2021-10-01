<?php

use Iterator\ClientCode;
use Iterator\Collection;
use Iterator\CollectionItem;

require __DIR__ . '/vendor/autoload.php';

$collection = new Collection(
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
);
$clientCode = new ClientCode();

$iterator = $collection->createEvenIterator();
$clientCode($iterator);

$iterator = $collection->createBackwardsIterator();
$clientCode($iterator);
