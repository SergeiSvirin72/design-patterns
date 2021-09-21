<?php

use Composite\ClientCode;
use Composite\Composite;
use Composite\LeafA;
use Composite\LeafB;

require __DIR__ . '/vendor/autoload.php';

$clientCode = new ClientCode();

$outerComposite = new Composite();
$leaf1 = new LeafA();

print $clientCode($leaf1)."\n";

$outerComposite->add($leaf1);
$innerComposite = new Composite();

$leaf2 = new LeafB();
$innerComposite->add($leaf2);
$leaf3 = new LeafA();
$innerComposite->add($leaf3);
$leaf4 = new LeafB();
$innerComposite->add($leaf4);

$innerComposite->remove($leaf2);

$outerComposite->add($innerComposite);
$leaf5 = new LeafB();
$outerComposite->add($leaf5);

print $outerComposite->getChildren()."\n";
print $clientCode($outerComposite)."\n";
