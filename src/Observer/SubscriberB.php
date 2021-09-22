<?php


namespace Observer;


use SplObserver;
use SplSubject;

class SubscriberB implements SplObserver
{
    public function update(SplSubject $subject)
    {
        print "SubscriberB: ".$subject->getState()."\n";
    }
}
