<?php

use Builder\ConcreteBuilderA;
use Builder\ConcreteBuilderB;
use Builder\Director;

require __DIR__ . '/vendor/autoload.php';

$builder = new ConcreteBuilderA();
$director = new Director();
$director->makeSimpleProduct($builder);
$product = $builder->getProduct();
var_dump($product);

$builder = new ConcreteBuilderB();
$director = new Director();
$director->makeFullProduct($builder);
$product = $builder->getProduct();
var_dump($product);
