<?php

namespace Visitor;

use Composite\ComponentInterface;

class ClientCode
{
    public function __invoke(ComponentInterface $component, VisitorInterface $visitor)
    {
        $this->iterateComponent($component, $visitor);
    }

    private function iterateComponent(ComponentInterface $component, VisitorInterface $visitor) {
        print $component->accept($visitor)."\n";
        if ($component->isComposite()) {
            $children = $component->getChildren();
            foreach ($children as $child) {
                $this->iterateComponent($child, $visitor);
            }
        }
    }
}
