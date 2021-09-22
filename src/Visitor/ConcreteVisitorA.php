<?php

namespace Visitor;

use Composite\Composite;
use Composite\LeafA;
use Composite\LeafB;

class ConcreteVisitorA implements VisitorInterface
{
    function visitComposite(Composite $element): string
    {
        return 'VisitorA visited: '.$element->featureComposite();
    }

    function visitLeafA(LeafA $element): string
    {
        return 'VisitorA visited: '.$element->featureLeafA();
    }

    function visitLeafB(LeafB $element): string
    {
        return 'VisitorA visited: '.$element->featureLeafB();
    }
}
