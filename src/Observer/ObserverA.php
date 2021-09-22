<?php


namespace Observer;


class ObserverA implements ObserverInterface
{
    public function update(ObservableInterface $observable)
    {
        print "ObserverA: ".$observable->getState()."\n";
    }
}
