<?php

use Prototype\AssociatedObject;
use Prototype\Prototype;

require __DIR__ . '/vendor/autoload.php';

$prototype = new Prototype();
$prototype->field = 'primitiveValue';
$associatedObject = new AssociatedObject($prototype);
$prototype->object = $associatedObject;

$clonedPrototype = clone $prototype;

var_dump($prototype);
var_dump($clonedPrototype);
