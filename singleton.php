<?php

use Singleton\Singleton;

require __DIR__ . '/vendor/autoload.php';

$singleton = Singleton::getInstance();
$singleton->someOperation();
