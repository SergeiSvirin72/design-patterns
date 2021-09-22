<?php

namespace Visitor;

use Composite\Composite;
use Composite\LeafA;
use Composite\LeafB;

class ConcreteVisitorB implements VisitorInterface
{
    function visitComposite(Composite $element): string
    {
        return 'VisitorB visited: '.$element->featureComposite();
    }

    function visitLeafA(LeafA $element): string
    {
        return 'VisitorB visited: '.$element->featureLeafA();
    }

    function visitLeafB(LeafB $element): string
    {
        return 'VisitorB visited: '.$element->featureLeafB();
    }
}
