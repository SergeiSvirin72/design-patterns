<?php

namespace ObjectPool;

class Pool
{
    private const MAX_NUMBER = 3;

    private array $freeItems = [];
    private array $occupiedItems = [];
    private int $number = 0;

    public function getItem(): ?PoolItem
    {
        if (!count($this->freeItems) && $this->canAddMore()) {
            $this->number += 1;
            $item = new PoolItem($this->number);
            $this->occupiedItems[] = $item;

            return $item;
        } elseif (count($this->freeItems)) {
            $item = array_pop($this->freeItems);
            $this->occupiedItems[] = $item;

            return $item;
        }

        return null;
    }

    public function dispose(PoolItem $item)
    {
        $index = array_search($item, $this->occupiedItems);
        $this->freeItems[] = $this->occupiedItems[$index];
        unset($this->occupiedItems[$index]);
    }

    private function canAddMore(): bool
    {
        return count($this->freeItems) + count($this->occupiedItems) < self::MAX_NUMBER;
    }

    public function showFreeItems()
    {
        print_r($this->freeItems);
    }

    public function showOccupiedItems()
    {
        print_r($this->occupiedItems);
    }
}