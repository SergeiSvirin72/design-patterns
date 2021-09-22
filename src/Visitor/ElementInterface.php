<?php

namespace Visitor;

interface ElementInterface
{
    public function accept(VisitorInterface $visitor);
}
