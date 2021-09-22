<?php


namespace Observer;


interface ObserverInterface
{
    public function update(ObservableInterface $observable);
}
