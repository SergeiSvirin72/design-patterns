<?php

use ObjectPool\Pool;

require __DIR__ . '/vendor/autoload.php';

$objectPool = new Pool();

$poolItem1 = $objectPool->getItem();
$poolItem2 = $objectPool->getItem();
$poolItem3 = $objectPool->getItem();
$poolItem4 = $objectPool->getItem();

$objectPool->dispose($poolItem3);
$objectPool->dispose($poolItem1);

$poolItem5 = $objectPool->getItem();
$poolItem6 = $objectPool->getItem();
$poolItem7 = $objectPool->getItem();

$objectPool->showFreeItems();
$objectPool->showOccupiedItems();
