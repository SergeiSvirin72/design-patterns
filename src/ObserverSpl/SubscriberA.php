<?php


namespace ObserverSpl;


use SplObserver;
use SplSubject;

class SubscriberA implements SplObserver
{
    public function update(SplSubject $subject)
    {
        print "SubscriberA: ".$subject->getState()."\n";
    }
}
