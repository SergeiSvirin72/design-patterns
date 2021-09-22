<?php

use Composite\Composite;
use Composite\LeafA;
use Composite\LeafB;
use Visitor\ClientCode;
use Visitor\ConcreteVisitorA;
use Visitor\ConcreteVisitorB;

require __DIR__ . '/vendor/autoload.php';

$clientCode = new ClientCode();

$outerComposite = new Composite();
$leaf1 = new LeafA();
$outerComposite->add($leaf1);
$innerComposite = new Composite();
$leaf2 = new LeafB();
$innerComposite->add($leaf2);
$outerComposite->add($innerComposite);
$leaf5 = new LeafB();
$outerComposite->add($leaf5);

$visitor = new ConcreteVisitorA();
$clientCode($outerComposite, $visitor);

$visitor = new ConcreteVisitorB();
$clientCode($outerComposite, $visitor);
