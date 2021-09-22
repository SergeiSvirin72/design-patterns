<?php


namespace Visitor;


use Composite\Composite;
use Composite\LeafA;
use Composite\LeafB;

interface VisitorInterface
{
    function visitComposite(Composite $element);

    function visitLeafA(LeafA $element);

    function visitLeafB(LeafB $element);
}
