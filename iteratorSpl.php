<?php

use IteratorSpl\Collection;
use IteratorSpl\CollectionItem;

require __DIR__ . '/vendor/autoload.php';

$collection = new Collection(
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
    new CollectionItem(uniqid()),
);

$iterator = $collection->createIterator();
foreach ($iterator as $key => $value) {
    print $value->getId() . "\n";
}
