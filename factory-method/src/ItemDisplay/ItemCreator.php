<?php


namespace ItemDisplay;


abstract class ItemCreator
{
    abstract function createItem() : ItemsInterface;

    public function makeDisplay()
    {
        $item = $this->createItem();
        return $item->makeDisplay();
    }
}
