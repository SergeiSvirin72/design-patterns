<?php


namespace Observer;


class ObserverB implements ObserverInterface
{
    public function update(ObservableInterface $observable)
    {
        print "ObserverB: ".$observable->getState()."\n";
    }
}
