<?php


namespace ItemDisplay;


class DefaultDisplayCreator extends ItemCreator
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function createItem(): ItemsInterface
    {
        return new DefaultDisplay($this->title);
    }
}
